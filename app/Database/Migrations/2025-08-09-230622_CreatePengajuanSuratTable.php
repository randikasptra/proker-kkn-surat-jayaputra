<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengajuanSurat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type' => 'INT', 'auto_increment' => true],
            'nama'              => ['type' => 'VARCHAR', 'constraint' => 255],
            'nik'               => ['type' => 'VARCHAR', 'constraint' => 50],
            'tanggal_pengajuan' => ['type' => 'DATE'],
            'jenis_surat'       => ['type' => 'VARCHAR', 'constraint' => 100],
            'alamat'            => ['type' => 'TEXT', 'null' => true],
            'tempat_lahir'      => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'tanggal_lahir'     => ['type' => 'DATE', 'null' => true],
            'keterangan'        => ['type' => 'TEXT', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pengajuan_surat');
    }

    public function down()
    {
        $this->forge->dropTable('pengajuan_surat');
    }
}
