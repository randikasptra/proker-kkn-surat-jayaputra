<?php

namespace App\Controllers;

class SuratController extends BaseController
{
    public function index()
    {
        return view('form_surat');
    }

    public function simpan()
    {
        $model = new SuratModel();

        $model->insert([
            'jenis_surat'   => $this->request->getPost('jenis_surat'),
            'nama'          => $this->request->getPost('nama'),
            'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'nik'           => $this->request->getPost('nik'),
            'alamat'        => $this->request->getPost('alamat'),
            'keperluan'     => $this->request->getPost('keperluan'),
            'tanggal_surat' => $this->request->getPost('tanggal_surat'),
        ]);

        return redirect()->to('/surat/cetak/' . $model->getInsertID());
    }

    public function cetak($id)
    {
        $model = new SuratModel();
        $data['surat'] = $model->find($id);

        return view('surat/cetak', $data);
    }
}
