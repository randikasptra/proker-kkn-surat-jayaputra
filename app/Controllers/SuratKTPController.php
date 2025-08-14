<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratKTPModel;

class SuratKTPController extends BaseController
{
    public function index()
    {
        return view('surat/ktp_form');
    }

    public function simpan()
    {
        $model = new SuratKTPModel();

        $data = [
            'nama'               => $this->request->getPost('nama'),
            'tempat_lahir'       => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir'      => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin'      => $this->request->getPost('jenis_kelamin'),
            'agama'              => $this->request->getPost('agama'),
            'status_perkawinan'  => $this->request->getPost('status_perkawinan'),
            'golongan_darah'     => $this->request->getPost('golongan_darah'),
            'pekerjaan'          => $this->request->getPost('pekerjaan'),
            'alamat'             => $this->request->getPost('alamat'),
            'nomor_kk'           => $this->request->getPost('nomor_kk'),
            'nik'                => $this->request->getPost('nik'),
            'kewarganegaraan'    => $this->request->getPost('kewarganegaraan'),
            'keperluan'          => $this->request->getPost('keperluan'),
            'jenis_permohonan'   => $this->request->getPost('jenis_permohonan'),
            'alasan_permohonan'  => $this->request->getPost('alasan_permohonan'),
            'dokumen_pendukung'  => $this->request->getPost('dokumen_pendukung'),
            'tanggal_pengajuan'  => $this->request->getPost('tanggal_pengajuan'),
            'status'             => 'Pending'
        ];

        $model->insert($data);
        $id = $model->getInsertID();

        return redirect()->to('/surat-ktp/cetak/' . $id);
    }

    public function cetak($id)
    {
        $model = new SuratKTPModel();
        $data['ktp'] = $model->find($id);

        if (!$data['ktp']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data Surat KTP tidak ditemukan");
        }

        return view('surat/ktp_cetak', $data);
    }
}
