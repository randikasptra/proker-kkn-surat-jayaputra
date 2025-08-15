<?php

namespace App\Controllers;

use App\Models\SuratSKTMModel;
use App\Models\SuratDomisiliModel;
use App\Models\SuratKTPModel;
use App\Models\SuratSKUModel; // Tambahan untuk SKU

class LaporanController extends BaseController
{
    public function index()
    {
        $sktmModel     = new SuratSKTMModel();
        $domisiliModel = new SuratDomisiliModel();
        $ktpModel      = new SuratKTPModel();
        $skuModel      = new SuratSKUModel(); // Tambahan

        // Ambil data SKTM
        $dataSktm = $sktmModel->findAll();
        foreach ($dataSktm as &$item) {
            $item['jenis_surat']        = 'Surat Keterangan Tidak Mampu';
            $item['tanggal_permohonan'] = $item['tanggal_surat'] ?? $item['created_at'];
            $item['link_cetak']         = base_url('surat-sktm/cetak/' . $item['id']);
            $item['link_hapus']         = base_url('laporan/hapus/sktm/' . $item['id']);
        }

        // Ambil data Domisili
        $dataDomisili = $domisiliModel->findAll();
        foreach ($dataDomisili as &$item) {
            $item['jenis_surat']        = 'Surat Keterangan Domisili';
            $item['tanggal_permohonan'] = $item['tanggal_pengajuan'] ?? $item['created_at'];
            $item['link_cetak']         = base_url('surat-domisili/cetak/' . $item['id']);
            $item['link_hapus']         = base_url('laporan/hapus/domisili/' . $item['id']);
        }

        // Ambil data KTP
        $dataKTP = $ktpModel->findAll();
        foreach ($dataKTP as &$item) {
            $item['jenis_surat']        = 'Surat Permohonan KTP';
            $item['tanggal_permohonan'] = $item['tanggal_pengajuan'] ?? $item['created_at'];
            $item['link_cetak']         = base_url('surat-ktp/cetak/' . $item['id']);
            $item['link_hapus']         = base_url('laporan/hapus/ktp/' . $item['id']);
        }

        // Ambil data SKU
        $dataSKU = $skuModel->findAll();
        foreach ($dataSKU as &$item) {
            $item['jenis_surat']        = 'Surat Keterangan Usaha';
            $item['tanggal_permohonan'] = $item['tanggal_pengajuan'] ?? $item['created_at'];
            $item['link_cetak']         = base_url('surat/sku/cetak/' . $item['id']);
            $item['link_hapus']         = base_url('laporan/hapus/sku/' . $item['id']);
        }

        // Gabung semua surat
        $laporan = array_merge($dataSktm, $dataDomisili, $dataKTP, $dataSKU);

        // Urutkan dari terbaru
        usort($laporan, function ($a, $b) {
            return strtotime($b['tanggal_permohonan']) - strtotime($a['tanggal_permohonan']);
        });

        return view('laporan_surat', ['laporan' => $laporan]);
    }

    public function hapus($jenis, $id)
    {
        if ($jenis === 'sktm') {
            $model = new SuratSKTMModel();
        } elseif ($jenis === 'domisili') {
            $model = new SuratDomisiliModel();
        } elseif ($jenis === 'ktp') {
            $model = new SuratKTPModel();
        } elseif ($jenis === 'sku') {
            $model = new SuratSKUModel(); // Tambahan untuk hapus SKU
        } else {
            return redirect()->to('/laporan-surat')->with('error', 'Jenis surat tidak valid');
        }

        if ($model->find($id)) {
            $model->delete($id);
            return redirect()->to('/laporan-surat')->with('success', 'Data berhasil dihapus');
        }

        return redirect()->to('/laporan-surat')->with('error', 'Data tidak ditemukan');
    }
}
