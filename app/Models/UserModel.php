<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 'name', 'email', 'no_hp', 'alamat', 'password', 'role'
    ];
    protected $useTimestamps = true;
}
