<?php

namespace App\Controllers;

use App\Models\SuratSKUModel;

class SuratSKUController extends BaseController
{
    public function index()
    {
        return view('surat/sku_form');
    }

   public function simpan()
{
    $model = new SuratSKUModel();

    $data = $this->request->getPost();
    $id = $model->insert($data); // insert() return ID baru

    return redirect()->to('/surat/sku/cetak/' . $id);
}


    public function cetak($id)
    {
        $model = new SuratSKUModel();
        $data['sku'] = $model->find($id);

        return view('surat/sku_cetak', $data);
    }
}
