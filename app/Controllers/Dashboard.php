<?php

namespace App\Controllers;

use App\Models\SuratSKTMModel;
use App\Models\SuratDomisiliModel;
use App\Models\SuratKTPModel;
use App\Models\SuratSKUModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $sktmModel     = new SuratSKTMModel();
        $domisiliModel = new SuratDomisiliModel();
        $ktpModel      = new SuratKTPModel();
        $skuModel      = new SuratSKUModel();

        // Hitung total masing-masing
        $total_sktm     = $sktmModel->countAllResults();
        $total_domisili = $domisiliModel->countAllResults();
        $total_ktp      = $ktpModel->countAllResults();
        $total_sku      = $skuModel->countAllResults();

        // Total keseluruhan
        $total_permohonan = $total_sktm + $total_domisili + $total_ktp + $total_sku;

        return view('dashboard', [
            'total_permohonan' => $total_permohonan,
            'total_sktm'       => $total_sktm,
            'total_domisili'   => $total_domisili,
            'total_ktp'        => $total_ktp,
            'total_sku'        => $total_sku
        ]);
    }
}
