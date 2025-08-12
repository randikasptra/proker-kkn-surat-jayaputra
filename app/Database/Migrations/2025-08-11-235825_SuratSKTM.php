<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SuratSKTM extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                  => ['type' => 'INT', 'auto_increment' => true],
            'pengajuan_id'        => ['type' => 'INT', 'unsigned' => true], // relasi ke pengajuan_surat.id
            'nik'                 => ['type' => 'VARCHAR', 'constraint' => 50],
            'tempat_tanggal_lahir'=> ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'jenis_kelamin'       => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'alamat'              => ['type' => 'TEXT', 'null' => true],
            'pekerjaan'           => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'created_at'          => ['type' => 'DATETIME', 'null' => true],
            'updated_at'          => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('pengajuan_id', 'pengajuan_surat', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('sktm');
    }

    public function down()
    {
        $this->forge->dropTable('sktm');
    }
}
