<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuratSKU extends Migration
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
            // Data Pemohon
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'tempat_lahir' => [
                'type'       => 'VARCHAR',
                'constraint' => '50'
            ],
            'tanggal_lahir' => [
                'type' => 'DATE'
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
            'pekerjaan' => [
                'type'       => 'VARCHAR',
                'constraint' => '50'
            ],
            'alamat_ktp' => [
                'type' => 'TEXT'
            ],
            'nik' => [
                'type'       => 'VARCHAR',
                'constraint' => '20'
            ],
            'nomor_kk' => [
                'type'       => 'VARCHAR',
                'constraint' => '20'
            ],

            // Data Usaha
            'nama_usaha' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'jenis_usaha' => [
                'type'       => 'VARCHAR',
                'constraint' => '50'
            ],
            'alamat_usaha' => [
                'type' => 'TEXT'
            ],
            'lama_berdiri' => [
                'type'       => 'VARCHAR',
                'constraint' => '50'
            ],
            'skala_usaha' => [
                'type'       => 'ENUM',
                'constraint' => ['Mikro', 'Kecil', 'Menengah']
            ],
            'jumlah_karyawan' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true
            ],

            // Keperluan
            'keperluan' => [
                'type' => 'TEXT'
            ],

            // Tanggal & Status
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
        $this->forge->createTable('surat_sku');
    }

    public function down()
    {
        $this->forge->dropTable('surat_sku');
    }
}
