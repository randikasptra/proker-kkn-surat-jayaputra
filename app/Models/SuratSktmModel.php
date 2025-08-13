<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratSktmModel extends Model
{
    protected $table            = 'surat';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'jenis_surat',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'nik',
        'alamat',
        'keperluan',
        'tanggal_surat',
        'created_at',
        'updated_at'
    ];

    // Gunakan timestamp bawaan CI4
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
