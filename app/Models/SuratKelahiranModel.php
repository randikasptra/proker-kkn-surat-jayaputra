<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKelahiranModel extends Model
{
    protected $table      = 'surat_kelahiran';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_bayi', 'jenis_kelamin_bayi', 'tempat_lahir_bayi', 'tanggal_lahir_bayi',
        'waktu_lahir', 'anak_ke', 'berat_badan', 'panjang_badan',
        'nama_ayah', 'tempat_lahir_ayah', 'tanggal_lahir_ayah', 'nik_ayah', 'agama_ayah', 'pekerjaan_ayah', 'alamat_ayah',
        'nama_ibu', 'tempat_lahir_ibu', 'tanggal_lahir_ibu', 'nik_ibu', 'agama_ibu', 'pekerjaan_ibu', 'alamat_ibu',
        'nama_pelapor', 'hubungan_bayi', 'alamat_pelapor', 'nik_pelapor',
        'nama_saksi1', 'nik_saksi1', 'nama_saksi2', 'nik_saksi2',
        'keperluan', 'tanggal_pengajuan'
    ];
    protected $useTimestamps = true;
}
