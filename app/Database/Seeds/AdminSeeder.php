<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username'   => 'admin',
            'name'       => 'Admin Desa',
            'email'      => 'admin@desa.com',
            'no_hp'      => '081234567890',
            'alamat'     => 'Kantor Desa',
            'password'   => password_hash('admin123', PASSWORD_DEFAULT),
            'role'       => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $this->db->table('users')->insert($data);
    }
}
