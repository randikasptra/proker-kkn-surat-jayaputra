<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('users');
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        $rules = [
            'username' => 'required|min_length[3]',
            'name'     => 'required',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'no_hp'    => 'required',
            'alamat'   => 'required',
            'password' => 'required|min_length[6]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new UserModel();
        $model->insert([
            'username' => $this->request->getPost('username'),
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'no_hp'    => $this->request->getPost('no_hp'),
            'alamat'   => $this->request->getPost('alamat'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/users')->with('success', 'User berhasil ditambahkan!');
    }
}
