<?php

namespace App\Controllers;

class PengajuanController extends BaseController
{
    public function index()
    {
        // Link Google Sheet dalam format CSV
        $url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vQ0HEJKUDY8srtlKMWAkf-E3klDnGJXKM6Jb5KEiZ0q02nrZFU_GaGm5bs38lbP6YtIqDF_3XRMyl86/pub?gid=1766586656&single=true&output=csv";

        $pengajuan = [];

        // Ambil & parsing CSV
        if (($handle = fopen($url, "r")) !== FALSE) {
            $header = fgetcsv($handle); // Ambil header dari file CSV
            while (($row = fgetcsv($handle)) !== FALSE) {
                $pengajuan[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return view('pengajuan_surat', [
            'pengajuan' => $pengajuan
        ]);
    }
}
