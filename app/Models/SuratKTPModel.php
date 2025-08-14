<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKTPModel extends Model
{
    protected $table = 'surat_ktp';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'status_perkawinan',
        'golongan_darah',
        'pekerjaan',
        'alamat',
        'nomor_kk',
        'nik',
        'kewarganegaraan',
        'keperluan',
        'jenis_permohonan',
        'alasan_permohonan',
        'dokumen_pendukung',
        'tanggal_pengajuan',
        'status'
    ];
    protected $useTimestamps = true;
}
