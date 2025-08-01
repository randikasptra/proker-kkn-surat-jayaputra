<?php

namespace App\Controllers;
use App\Models\UserModel;

class SettingsController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $session = session();
        $userId = $session->get('user_id');

        $user = $userModel->find($userId);

        return view('settings', ['user' => $user]);
    }

    public function update()
    {
        $userModel = new UserModel();
        $session = session();
        $userId = $session->get('user_id');

        $data = [];

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username) {
            $data['username'] = $username;
        }

        if ($password) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        if (!empty($data)) {
            $userModel->update($userId, $data);
            return redirect()->to('/settings')->with('success', 'Data berhasil diperbarui.');
        }

        return redirect()->to('/settings')->with('error', 'Tidak ada data yang diperbarui.');
    }
}
