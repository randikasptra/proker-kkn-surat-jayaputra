<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuratKelahiran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                  => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
            // Data Bayi
            'nama_bayi'           => ['type' => 'VARCHAR', 'constraint' => 100],
            'jenis_kelamin_bayi'  => ['type' => 'VARCHAR', 'constraint' => 20],
            'tempat_lahir_bayi'   => ['type' => 'VARCHAR', 'constraint' => 50],
            'tanggal_lahir_bayi'  => ['type' => 'DATE'],
            'waktu_lahir'         => ['type' => 'TIME', 'null' => true],
            'anak_ke'             => ['type' => 'INT', 'constraint' => 3, 'null' => true],
            'berat_badan'         => ['type' => 'VARCHAR', 'constraint' => 10, 'null' => true],
            'panjang_badan'       => ['type' => 'VARCHAR', 'constraint' => 10, 'null' => true],

            // Data Ayah
            'nama_ayah'           => ['type' => 'VARCHAR', 'constraint' => 100],
            'tempat_lahir_ayah'   => ['type' => 'VARCHAR', 'constraint' => 50],
            'tanggal_lahir_ayah'  => ['type' => 'DATE'],
            'nik_ayah'            => ['type' => 'VARCHAR', 'constraint' => 20],
            'agama_ayah'          => ['type' => 'VARCHAR', 'constraint' => 20],
            'pekerjaan_ayah'      => ['type' => 'VARCHAR', 'constraint' => 50],
            'alamat_ayah'         => ['type' => 'TEXT'],

            // Data Ibu
            'nama_ibu'            => ['type' => 'VARCHAR', 'constraint' => 100],
            'tempat_lahir_ibu'    => ['type' => 'VARCHAR', 'constraint' => 50],
            'tanggal_lahir_ibu'   => ['type' => 'DATE'],
            'nik_ibu'             => ['type' => 'VARCHAR', 'constraint' => 20],
            'agama_ibu'           => ['type' => 'VARCHAR', 'constraint' => 20],
            'pekerjaan_ibu'       => ['type' => 'VARCHAR', 'constraint' => 50],
            'alamat_ibu'          => ['type' => 'TEXT'],

            // Data Pelapor
            'nama_pelapor'        => ['type' => 'VARCHAR', 'constraint' => 100],
            'hubungan_bayi'       => ['type' => 'VARCHAR', 'constraint' => 50],
            'alamat_pelapor'      => ['type' => 'TEXT'],
            'nik_pelapor'         => ['type' => 'VARCHAR', 'constraint' => 20],

            // Data Saksi
            'nama_saksi1'         => ['type' => 'VARCHAR', 'constraint' => 100],
            'nik_saksi1'          => ['type' => 'VARCHAR', 'constraint' => 20],
            'nama_saksi2'         => ['type' => 'VARCHAR', 'constraint' => 100],
            'nik_saksi2'          => ['type' => 'VARCHAR', 'constraint' => 20],

            // Keperluan
            'keperluan'           => ['type' => 'TEXT'],
            'tanggal_pengajuan'   => ['type' => 'DATE', 'null' => true],

            'created_at'          => ['type' => 'DATETIME', 'null' => true],
            'updated_at'          => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('surat_kelahiran');
    }

    public function down()
    {
        $this->forge->dropTable('surat_kelahiran');
    }
}
