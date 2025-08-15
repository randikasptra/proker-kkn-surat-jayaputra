<?php

namespace App\Controllers;

use App\Models\SuratKelahiranModel;

class SuratKelahiranController extends BaseController
{
    public function index()
    {
        return view('surat/kelahiran_form');
    }

    public function simpan()
    {
        $model = new SuratKelahiranModel();
        $data = $this->request->getPost();
        $id = $model->insert($data);

        return redirect()->to('/surat/kelahiran/cetak/' . $id)
                         ->with('success', 'Surat Keterangan Kelahiran berhasil diajukan.');
    }

    public function cetak($id)
    {
        $model = new SuratKelahiranModel();
        $data['kelahiran'] = $model->find($id);

        return view('surat/kelahiran_cetak', $data);
    }
}
