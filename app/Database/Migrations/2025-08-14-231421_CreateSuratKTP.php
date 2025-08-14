<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuratKTP extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'tempat_lahir' => [
                'type'       => 'VARCHAR',
                'constraint' => '50'
            ],
            'tanggal_lahir' => [
                'type' => 'DATE',
                'null' => true
            ],
            'jenis_kelamin' => [
                'type'       => 'ENUM',
                'constraint' => ['Laki-laki', 'Perempuan']
            ],
            'agama' => [
                'type'       => 'VARCHAR',
                'constraint' => '20'
            ],
            'status_perkawinan' => [
                'type'       => 'VARCHAR',
                'constraint' => '20'
            ],
            'golongan_darah' => [
                'type'       => 'VARCHAR',
                'constraint' => '3',
                'null'       => true
            ],
            'pekerjaan' => [
                'type'       => 'VARCHAR',
                'constraint' => '50'
            ],
            'alamat' => [
                'type' => 'TEXT'
            ],
            'nomor_kk' => [
                'type'       => 'VARCHAR',
                'constraint' => '20'
            ],
            'nik' => [
                'type'       => 'VARCHAR',
                'constraint' => '20'
            ],
            'kewarganegaraan' => [
                'type'       => 'VARCHAR',
                'constraint' => '30'
            ],
            'keperluan' => [
                'type' => 'TEXT'
            ],
            'jenis_permohonan' => [
                'type'       => 'ENUM',
                'constraint' => ['Baru', 'Perpanjangan', 'Penggantian', 'Perubahan Data']
            ],
            'alasan_permohonan' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'dokumen_pendukung' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'tanggal_pengajuan' => [
                'type' => 'DATE',
                'null' => true
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['Pending', 'Disetujui', 'Ditolak'],
                'default'    => 'Pending'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('surat_ktp');
    }

    public function down()
    {
        $this->forge->dropTable('surat_ktp');
    }
}
