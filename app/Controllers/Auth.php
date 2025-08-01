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
        $nik      = $this->request->getPost('nik');
        $password = $this->request->getPost('password');

        $user = $this->userModel->where('nik', $nik)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'user_id'   => $user['id'],
                'nik'       => $user['nik'],
                'name'      => $user['name'],
                'role'      => $user['role'],
                'logged_in' => true
            ]);

            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/login')->with('error', 'NIK atau Password salah');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
