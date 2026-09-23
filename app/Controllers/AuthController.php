<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper(['form', 'url']);
    }

    public function login()
    {
        // Jika sudah login, langsung lempar ke admin dashboard
        if (session()->get('is_admin')) {
            return redirect()->to(base_url('admin/dashboard'));
        }

        return view('admin/login', [
            'title' => 'Login Admin - Laksa Benteng Carlendra',
        ]);
    }

    public function attemptLogin()
    {
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                             ->withInput()
                             ->with('error', 'Silakan masukkan username dan password.');
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $this->userModel->findByCredentials($username);

        if (!$user) {
            return redirect()->back()
                             ->withInput()
                             ->with('error', 'Akun tidak ditemukan. Periksa kembali username Anda.');
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->back()
                             ->withInput()
                             ->with('error', 'Password yang Anda masukkan salah.');
        }

        // Simpan sesi login admin
        session()->set([
            'is_admin'  => true,
            'user_id'   => $user['id'],
            'username'  => $user['username'],
            'user_name' => $user['name'],
            'user_role' => $user['role'],
        ]);

        return redirect()->to(base_url('admin/dashboard'))
                         ->with('success', 'Selamat datang kembali, ' . $user['name'] . '!');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('admin/login'))
                         ->with('success', 'Anda telah berhasil logout.');
    }
}
