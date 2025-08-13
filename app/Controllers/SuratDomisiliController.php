<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratDomisiliModel;

class SuratDomisiliController extends BaseController
{
    public function index()
    {
        // Tampilkan form domisili
        return view('surat/domisili_form');
    }

    public function simpan()
    {
        $model = new SuratDomisiliModel();

        $data = [
            'alamat'         => $this->request->getPost('alamat'),
            'rt'             => $this->request->getPost('rt'),
            'rw'             => $this->request->getPost('rw'),
            'desa'           => $this->request->getPost('desa'),
            'kecamatan'      => $this->request->getPost('kecamatan'),
            'kabupaten'      => $this->request->getPost('kabupaten'),
            'tanggal_surat'  => $this->request->getPost('tanggal_surat'),
        ];

        $model->insert($data);

        return redirect()->to('/surat-domisili')->with('success', 'Surat Domisili berhasil disimpan');
    }
}
