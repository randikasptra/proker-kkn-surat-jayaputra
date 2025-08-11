<?php

namespace App\Controllers;

use App\Models\PengajuanModel;

class PengajuanController extends BaseController
{
    public function index()
    {
        $model = new PengajuanModel();
        $pengajuan = $model->findAll();

        return view('pengajuan_surat', [
            'pengajuan' => $pengajuan
        ]);
    }

    // Import data dari sheet (manual)
  public function import()
{
    $url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vQ0HEJKUDY8srtlKMWAkf-E3klDnGJXKM6Jb5KEiZ0q02nrZFU_GaGm5bs38lbP6YtIqDF_3XRMyl86/pub?gid=1766586656&single=true&output=csv";
    $pengajuanData = [];

    $model = new PengajuanModel();

    // Ambil semua data yang sudah ada di database
    $existing = $model->select('nik, tanggal_pengajuan')->findAll();
    $existingSet = [];
    foreach ($existing as $row) {
        // Samakan format tanggal untuk perbandingan
        $tglDb = date('d/m/Y H:i:s', strtotime($row['tanggal_pengajuan']));
        $existingSet[$row['nik'] . '|' . $tglDb] = true;
    }

    // Ambil data dari sheet
    if (($handle = fopen($url, "r")) !== FALSE) {
        $header = fgetcsv($handle);
        while (($row = fgetcsv($handle)) !== FALSE) {
            $data = array_combine($header, $row);
            $nik = $data['NIK'] ?? '';
            $tanggalSheet = $data['Timestamp'] ?? '';

            // Samakan format tanggal sheet agar match dengan DB
            $tanggalFormatted = date('d/m/Y H:i:s', strtotime($tanggalSheet));

            // Masukkan hanya kalau belum ada di database
            if (!isset($existingSet[$nik . '|' . $tanggalFormatted])) {
                $pengajuanData[] = [
                    'nama'              => $data['Nama Lengkap'] ?? '',
                    'nik'               => $nik,
                    'tanggal_pengajuan' => date('Y-m-d H:i:s', strtotime($tanggalSheet)), // simpan format SQL
                    'jenis_surat'       => 'SKTM'
                ];
            }
        }
        fclose($handle);
    }

    // Insert hanya data baru
    if (!empty($pengajuanData)) {
        $model->insertBatch($pengajuanData);
    }

    return redirect()->to('/pengajuan-surat')->with('success', 'Data baru berhasil diimport dari sheet');
}



    public function delete($id)
    {
        $model = new PengajuanModel();

        if ($model->delete($id)) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'ID tidak ditemukan'
            ]);
        }
    }

   

}
