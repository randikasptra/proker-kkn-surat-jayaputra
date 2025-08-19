<?php

namespace App\Controllers;

use App\Models\SuratSKTMModel;
use App\Models\SuratDomisiliModel;
use App\Models\SuratKTPModel;
use App\Models\SuratSKUModel;
use App\Models\SuratKelahiranModel; // Tambahan untuk kelahiran

class LaporanController extends BaseController
{
  public function index()
{
    $jenis = $this->request->getGet('jenis_surat');
    $tanggal_mulai = $this->request->getGet('tanggal_mulai');
    $tanggal_selesai = $this->request->getGet('tanggal_selesai');

    $sktmModel     = new SuratSKTMModel();
    $domisiliModel = new SuratDomisiliModel();
    $ktpModel      = new SuratKTPModel();
    $skuModel      = new SuratSKUModel();
    $kelahiranModel= new SuratKelahiranModel(); // 👈 tambahan

    $laporan = [];

    // --- SKTM ---
    $dataSktm = $sktmModel->findAll();
    foreach ($dataSktm as &$item) {
        $item['jenis_surat']        = 'Surat Keterangan Tidak Mampu';
        $item['tanggal_permohonan'] = $item['tanggal_surat'] ?? $item['created_at'];
        $item['link_cetak']         = base_url('surat-sktm/cetak/' . $item['id']);
        $item['link_hapus']         = base_url('laporan/hapus/sktm/' . $item['id']);
        $laporan[] = $item;
    }

    // --- Domisili ---
    $dataDomisili = $domisiliModel->findAll();
    foreach ($dataDomisili as &$item) {
        $item['jenis_surat']        = 'Surat Keterangan Domisili';
        $item['tanggal_permohonan'] = $item['tanggal_pengajuan'] ?? $item['created_at'];
        $item['link_cetak']         = base_url('surat-domisili/cetak/' . $item['id']);
        $item['link_hapus']         = base_url('laporan/hapus/domisili/' . $item['id']);
        $laporan[] = $item;
    }

    // --- KTP ---
    $dataKTP = $ktpModel->findAll();
    foreach ($dataKTP as &$item) {
        $item['jenis_surat']        = 'Surat Permohonan KTP';
        $item['tanggal_permohonan'] = $item['tanggal_pengajuan'] ?? $item['created_at'];
        $item['link_cetak']         = base_url('surat-ktp/cetak/' . $item['id']);
        $item['link_hapus']         = base_url('laporan/hapus/ktp/' . $item['id']);
        $laporan[] = $item;
    }

    // --- SKU ---
    $dataSKU = $skuModel->findAll();
    foreach ($dataSKU as &$item) {
        $item['jenis_surat']        = 'Surat Keterangan Usaha';
        $item['tanggal_permohonan'] = $item['tanggal_pengajuan'] ?? $item['created_at'];
        $item['link_cetak']         = base_url('surat/sku/cetak/' . $item['id']);
        $item['link_hapus']         = base_url('laporan/hapus/sku/' . $item['id']);
        $laporan[] = $item;
    }

    // --- Kelahiran ---
    $dataKelahiran = $kelahiranModel->findAll();
    foreach ($dataKelahiran as &$item) {
        $item['jenis_surat']        = 'Surat Keterangan Kelahiran';
        $item['tanggal_permohonan'] = $item['tanggal_surat'] ?? $item['created_at'];
$item['link_cetak'] = base_url('surat/kelahiran/cetak/' . $item['id']);
$item['link_hapus'] = base_url('laporan/hapus/kelahiran/' . $item['id']);

        $laporan[] = $item;
    }

    // --- Filter jenis ---
    if ($jenis) {
        $laporan = array_filter($laporan, function ($row) use ($jenis) {
            return $row['jenis_surat'] === $jenis;
        });
    }

    // --- Filter tanggal ---
    if ($tanggal_mulai && $tanggal_selesai) {
        $laporan = array_filter($laporan, function ($row) use ($tanggal_mulai, $tanggal_selesai) {
            $tgl = date('Y-m-d', strtotime($row['tanggal_permohonan']));
            return $tgl >= $tanggal_mulai && $tgl <= $tanggal_selesai;
        });
    }

    // --- Urutkan terbaru ---
    usort($laporan, function ($a, $b) {
        return strtotime($b['tanggal_permohonan']) - strtotime($a['tanggal_permohonan']);
    });

    return view('laporan_surat', [
        'laporan' => $laporan,
        'jenis' => $jenis,
        'tanggal_mulai' => $tanggal_mulai,
        'tanggal_selesai' => $tanggal_selesai
    ]);
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
            $model = new SuratSKUModel();
        } elseif ($jenis === 'kelahiran') {
            $model = new SuratKelahiranModel(); // Tambahan hapus kelahiran
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
