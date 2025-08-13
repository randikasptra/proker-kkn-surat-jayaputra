<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratDomisiliModel extends Model
{
    protected $table      = 'surat_domisili';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'alamat', 'rt', 'rw', 'desa', 'kecamatan', 'kabupaten', 'tanggal_surat'
    ];
}
