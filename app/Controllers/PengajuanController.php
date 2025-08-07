<?php

namespace App\Controllers;

class PengajuanController extends BaseController
{
    public function index()
    {
        $sheetUrl = 'https://opensheet.elk.sh/2PACX-1vQ0HEJKUDY8srtlKMWAkf-E3klDnGJXKM6Jb5KEiZ0q02nrZFU_GaGm5bs38lbP6YtIqDF_3XRMyl86/Form%20Responses%201';

        $client = \Config\Services::curlrequest();
        $response = $client->get($sheetUrl);

        $data = [
            'pengajuan' => json_decode($response->getBody(), true)
        ];

        return view('pengajuan_surat/index', $data); // ← path view sudah sesuai
    }
}
