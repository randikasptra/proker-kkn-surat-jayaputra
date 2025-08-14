<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratDomisiliModel;

class SuratDomisiliController extends BaseController
{
    public function index()
    {
        return view('surat/domisili_form');
    }

    public function simpan()
    {
        $model = new SuratDomisiliModel();

        // Ambil data dari form
        $data = [
            'nama'              => trim($this->request->getPost('nama')),
            'tempat_lahir'      => trim($this->request->getPost('tempat_lahir')),
            'tanggal_lahir'     => $this->request->getPost('tanggal_lahir') ?: null,
            'jenis_kelamin'     => $this->request->getPost('jenis_kelamin'),
            'agama'             => trim($this->request->getPost('agama')),
            'pekerjaan'         => trim($this->request->getPost('pekerjaan')),
            'alamat'            => trim($this->request->getPost('alamat')),
            'rt'                => trim($this->request->getPost('rt')),
            'rw'                => trim($this->request->getPost('rw')),
            'keperluan'         => trim($this->request->getPost('keperluan')),
            'tanggal_pengajuan' => $this->request->getPost('tanggal_pengajuan') ?: null,
            'status'            => 'Pending',
        ];

        // Validasi sederhana
        if (empty($data['nama']) || empty($data['tanggal_lahir']) || empty($data['alamat'])) {
            return redirect()->back()->withInput()->with('error', 'Nama, Tanggal Lahir, dan Alamat wajib diisi.');
        }

        // Simpan ke database
        if ($model->insert($data) === false) {
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data.');
        }

        $id = $model->getInsertID();

        return redirect()->to('/surat-domisili/cetak/' . $id)
                         ->with('success', 'Surat Domisili berhasil disimpan.');
    }

    public function cetak($id)
    {
        $model = new SuratDomisiliModel();
        $data['domisili'] = $model->find($id);

        if (!$data['domisili']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data Surat Domisili tidak ditemukan");
        }

        // Pastikan tanggal ada biar nggak error format
        if (empty($data['domisili']['tanggal_pengajuan'])) {
            $data['domisili']['tanggal_pengajuan'] = date('Y-m-d');
        }

        return view('surat/domisili_cetak', $data);
    }
}
