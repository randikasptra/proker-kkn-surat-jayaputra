<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratSKTMModel;

class SuratSKTMController extends BaseController
{
    public function index()
    {
        // Menampilkan form input SKTM
        return view('surat/sktm_form');
    }
    
    public function simpan()
    {
        $model = new SuratSKTMModel();

        $data = [
            'nama'             => $this->request->getPost('nama'),
            'nik'              => $this->request->getPost('nik'),
            'kk'               => $this->request->getPost('kk'),
            'jenis_kelamin'    => $this->request->getPost('jenis_kelamin'),
            'tempat_lahir'     => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir'    => $this->request->getPost('tanggal_lahir'),
            'agama'            => $this->request->getPost('agama'),
            'status_perkawinan'=> $this->request->getPost('status_perkawinan'),
            'alamat'           => $this->request->getPost('alamat'),
            'status_pekerjaan' => $this->request->getPost('status_pekerjaan'),
            'desil'            => $this->request->getPost('desil'),
            'penghasilan'      => $this->request->getPost('penghasilan'),
            'tanggal_surat'    => date('Y-m-d'),
        ];

        $model->insert($data);

        $id = $model->getInsertID();

        return redirect()->to('/surat-sktm/cetak/' . $id);
    }

    public function cetak($id)
    {
        $model = new SuratSKTMModel();
        $data['sktm'] = $model->find($id);

        if (!$data['sktm']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data SKTM tidak ditemukan");
        }

        return view('surat/sktm_cetak', $data);
    }
}
