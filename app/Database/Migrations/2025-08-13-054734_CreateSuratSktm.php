<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuratSktm extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id'               => ['type' => 'INT', 'auto_increment' => true],
            'nama'             => ['type' => 'VARCHAR', 'constraint' => 100],
            'nik'              => ['type' => 'VARCHAR', 'constraint' => 20],
            'kk'               => ['type' => 'VARCHAR', 'constraint' => 20],
            'jenis_kelamin'    => ['type' => 'ENUM', 'constraint' => ['L', 'P']],
            'tempat_lahir'     => ['type' => 'VARCHAR', 'constraint' => 50],
            'tanggal_lahir'    => ['type' => 'DATE'],
            'agama'            => ['type' => 'VARCHAR', 'constraint' => 50],
            'status_perkawinan'=> ['type' => 'VARCHAR', 'constraint' => 50],
            'alamat'           => ['type' => 'TEXT'],
            'status_pekerjaan' => ['type' => 'VARCHAR', 'constraint' => 100],
            'desil'            => ['type' => 'VARCHAR', 'constraint' => 50],
            'penghasilan'      => ['type' => 'BIGINT', 'null' => true],
            'keperluan' => ['type' => 'VARCHAR', 'constraint' => 100],
            'tanggal_surat'    => ['type' => 'DATE'],
            'created_at'       => ['type' => 'DATETIME', 'null' => true],
            'updated_at'       => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('surat');
    }

    public function down()
    {
        $this->forge->dropTable('surat');
    }
}
