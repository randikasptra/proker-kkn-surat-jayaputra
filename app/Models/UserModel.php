<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useTimestamps = true; // karena ada `created_at` dan `updated_at`
    protected $allowedFields = [
        'username', 'name', 'email', 'no_hp', 'alamat', 'password', 'role'
    ];

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    // Optional: validasi bawaan (tidak wajib, bisa diatur manual di controller)
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = true;
}
