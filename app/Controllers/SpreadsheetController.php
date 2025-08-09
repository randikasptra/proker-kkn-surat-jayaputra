<?php

namespace App\Controllers;

class SpreadsheetController extends BaseController
{
    public function index()
    {
        $url = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQ0HEJKUDY8srtlKMWAkf-E3klDnGJXKM6Jb5KEiZ0q02nrZFU_GaGm5bs38lbP6YtIqDF_3XRMyl86/pub?output=csv';
        
        // Ambil data CSV dari URL
        $csvData = file_get_contents($url);

        // Ubah CSV ke array
        $rows = array_map("str_getcsv", explode("\n", $csvData));

        return view('spreadsheet_view', ['rows' => $rows]);
    }
}
