<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // Kalau sudah login, langsung redirect ke dashboard
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }

        return view('auth/login');
    }

    public function loginProcess()
{
    $session = session();
    $userModel = new \App\Models\UserModel();

    $nik = $this->request->getPost('nik');
    $password = $this->request->getPost('password');

    $user = $userModel->where('nik', $nik)->first();

    if ($user) {
        if ($user['role'] !== 'admin') {
            return redirect()->back()->with('error', 'Akses hanya untuk admin.');
        }

        if (password_verify($password, $user['password'])) {
            $session->set([
                'user_id'   => $user['id'],
                'name'      => $user['name'],
                'nik'       => $user['nik'],
                'role'      => $user['role'],
                'logged_in' => true
            ]);

            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Password salah.');
        }
    } else {
        return redirect()->back()->with('error', 'NIK tidak ditemukan.');
    }
}


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
