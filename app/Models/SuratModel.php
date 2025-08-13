<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    protected $table      = 'surat';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'jenis_surat', 'nama', 'tempat_lahir', 'tanggal_lahir',
        'jenis_kelamin', 'nik', 'alamat', 'keperluan', 'tanggal_surat'
    ];

    protected $useTimestamps = true;
}
