<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuratSktm extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => ['type' => 'INT', 'auto_increment' => true],
            'jenis_surat'    => ['type' => 'VARCHAR', 'constraint' => 100],
            'nama'           => ['type' => 'VARCHAR', 'constraint' => 100],
            'tempat_lahir'   => ['type' => 'VARCHAR', 'constraint' => 50],
            'tanggal_lahir'  => ['type' => 'DATE'],
            'jenis_kelamin'  => ['type' => 'ENUM', 'constraint' => ['L', 'P']],
            'nik'            => ['type' => 'VARCHAR', 'constraint' => 20],
            'alamat'         => ['type' => 'TEXT'],
            'keperluan'      => ['type' => 'TEXT', 'null' => true],
            'tanggal_surat'  => ['type' => 'DATE'],
            'created_at'     => ['type' => 'DATETIME', 'null' => true],
            'updated_at'     => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('surat');
    }

    public function down()
    {
        $this->forge->dropTable('surat');
    }
}
