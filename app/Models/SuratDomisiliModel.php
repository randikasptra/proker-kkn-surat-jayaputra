<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratDomisiliModel extends Model
{
    protected $table            = 'surat_domisili';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'pekerjaan',
        'alamat',
        'rt',
        'rw',
        'keperluan',
        'tanggal_pengajuan',
        'status'
    ];

    // Opsional kalau mau otomatis timestamp
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
