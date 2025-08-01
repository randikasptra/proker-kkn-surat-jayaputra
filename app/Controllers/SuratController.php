<?php

namespace App\Controllers;

class SuratController extends BaseController
{
    public function index()
    {
        return view('form_surat');
    }

    public function kirim()
    {
        $nama = $this->request->getPost('nama');
        $nik = $this->request->getPost('nik');
        $jenis_surat = $this->request->getPost('jenis_surat');

        // Validasi sederhana (bisa ditambahkan lagi)
        if (!$nama || !$nik || !$jenis_surat) {
            return redirect()->back()->with('error', 'Semua field wajib diisi.');
        }

        // Simpan ke database atau proses sesuai jenis_surat
        // Sementara ini kita tampilkan flashdata aja
        return redirect()->to('/surat')->with('success', 'Permohonan surat berhasil dikirim.');
    }
}
