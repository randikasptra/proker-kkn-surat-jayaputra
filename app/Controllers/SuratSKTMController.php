<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratSKTMModel;

class SuratSKTMController extends BaseController
{
    public function index()
    {
        // Menampilkan form SKTM
        return view('surat/sktm_form');
    }
    
    public function simpan()
    {
        $model = new SuratSKTMModel();

        $data = [
            'jenis_surat'   => 'SKTM',
            'nama'          => $this->request->getPost('nama'),
            'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'nik'           => $this->request->getPost('nik'),
            'alamat'        => $this->request->getPost('alamat'),
            'keperluan'     => $this->request->getPost('keperluan'),
            'tanggal_surat' => date('Y-m-d'),
        ];

        $model->insert($data);

        $id = $model->getInsertID();

        // Redirect ke halaman preview (siap cetak)
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
