<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanModel extends Model
{
    protected $table = 'pengajuan_surat';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'nik',
        'tanggal_pengajuan',
        'jenis_surat'
    ];
}
