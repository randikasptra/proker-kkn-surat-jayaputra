<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratSKTMModel;

class SuratSKTMController extends BaseController
{
    public function index()
    {
        return view('surat/sktm_form');
    }
    

    public function proses()
    {
        $model = new SuratSKTMModel();

        $data = [
            'alamat'        => $this->request->getPost('alamat'),
            'pekerjaan'     => $this->request->getPost('pekerjaan'),
            'keperluan'     => $this->request->getPost('keperluan'),
            'tanggal_surat' => date('Y-m-d'),
        ];

        $model->insert($data);

        $id = $model->getInsertID();

        return redirect()->to('/surat-sktm/cetak/'.$id);
    }

    public function cetak($id)
    {
        $model = new SuratSKTMModel();
        $surat = $model->find($id);

        if (!$surat) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Surat SKTM tidak ditemukan.");
        }

        return view('surat/sktm_preview', ['surat' => $surat]);
    }
}
