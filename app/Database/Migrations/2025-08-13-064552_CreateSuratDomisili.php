<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuratDomisili extends Migration
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
            'pekerjaan' => [
                'type'       => 'VARCHAR',
                'constraint' => '50'
            ],
            'alamat' => [
                'type' => 'TEXT'
            ],
            'rt' => [
                'type'       => 'VARCHAR',
                'constraint' => '3'
            ],
            'rw' => [
                'type'       => 'VARCHAR',
                'constraint' => '3'
            ],
            'keperluan' => [
                'type' => 'TEXT'
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
        $this->forge->createTable('surat_domisili');
    }

    public function down()
    {
        $this->forge->dropTable('surat_domisili');
    }
}
