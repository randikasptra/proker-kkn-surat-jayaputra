<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
use Google\Client;
use Google\Service\Sheets;

class PengajuanController extends BaseController
{
    public function index()
    {
        $model = new PengajuanModel();
        $pengajuan = $model->findAll();

        return view('pengajuan_surat', ['pengajuan' => $pengajuan]);
    }

    /**
     * Sinkronisasi dari Google Sheet ke Database
     * - Tidak menghapus / mengubah data di Sheet
     * - Hanya insert data baru
     */
    public function syncFromSheet()
    {
        $model = new PengajuanModel();

        // Konfigurasi Google API
        $client = new Client();
        $client->setApplicationName('Import Sheet to DB');
        $client->setScopes([Sheets::SPREADSHEETS_READONLY]);
        $client->setAuthConfig(WRITEPATH . 'credentials.json');

        $service = new Sheets($client);

        // ID spreadsheet dari URL publik kamu
        // Contoh: https://docs.google.com/spreadsheets/d/<ID>/edit
        $spreadsheetId = '1vQ0HEJKUDY8srtlKMWAkf-E3klDnGJXKM6Jb5KEiZ0q0';

        // Nama sheet sesuai di file (lihat di tab bawah sheet)
        $range = 'Form_Responses!A2:G'; // Timestamp s/d Pekerjaan

        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();

        $insertedCount = 0;

        if (!empty($values)) {
            foreach ($values as $row) {
                $timestamp     = $row[0] ?? '';
                $nama          = $row[1] ?? '';
                $nik           = $row[2] ?? '';
                $tempatLahir   = $row[3] ?? '';
                $jenisKelamin  = $row[4] ?? '';
                $alamat        = $row[5] ?? '';
                $pekerjaan     = $row[6] ?? '';

                $data = [
                    'nama'              => $nama,
                    'nik'               => $nik,
                    'tanggal_pengajuan' => !empty($timestamp) ? date('Y-m-d', strtotime($timestamp)) : null,
                    'jenis_surat'       => 'SKTM', // default
                    'alamat'            => $alamat,
                    'tempat_lahir'      => $tempatLahir,
                    'tanggal_lahir'     => null, // belum ada di sheet
                    'keterangan'        => $pekerjaan
                ];

                // Insert hanya jika data belum ada
                if (
                    !$model->where('nik', $nik)
                           ->where('tanggal_pengajuan', $data['tanggal_pengajuan'])
                           ->first()
                ) {
                    $model->insert($data);
                    $insertedCount++;
                }
            }
        }

        return redirect()->to('/pengajuan-surat')
            ->with('success', "$insertedCount data baru berhasil diimport dari Google Sheet ke database.");
    }
}
