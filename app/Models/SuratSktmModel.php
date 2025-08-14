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
        'nik',
        'kk',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'status_perkawinan',
        'alamat',
        'status_pekerjaan',
        'desil',
        'penghasilan',
        'keperluan',
        'tanggal_surat'
    ];

    // Gunakan timestamp bawaan CI4
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
