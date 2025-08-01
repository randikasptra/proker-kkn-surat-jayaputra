<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper(['form', 'url']);
    }

    public function showLogin()
    {
        return view('auth/login');
    }

   public function login()
{
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $user = $this->userModel->where('username', $username)->first();

    if (!$user) {
        die('Username tidak ditemukan'); // sementara, biar jelas
    }

    if (!password_verify($password, $user['password'])) {
        echo 'Password tidak cocok<br>';
        echo 'Input Password: ' . $password . '<br>';
        echo 'Password di DB (hashed): ' . $user['password'];
        exit;
    }

    // Kalau lolos semua
    session()->set([
        'user_id'   => $user['id'],
        'username'  => $user['username'],
        'name'      => $user['name'],
        'role'      => $user['role'],
        'logged_in' => true
    ]);
    return redirect()->to('/dashboard');
}


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
