<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratSKUModel extends Model
{
    protected $table            = 'surat_sku';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'status_perkawinan',
        'pekerjaan', 'alamat_ktp', 'nik', 'nomor_kk',
        'nama_usaha', 'jenis_usaha', 'alamat_usaha', 'lama_berdiri', 'skala_usaha', 'jumlah_karyawan',
        'keperluan', 'tanggal_pengajuan', 'status', 'created_at', 'updated_at'
    ];
    protected $useTimestamps = true;
}
