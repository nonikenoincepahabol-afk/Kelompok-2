<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('auth/login'); // tampilkan form login
    }

    public function auth()
    {
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if($user && password_verify($password, $user->password)){
            $session->set([
                'isLoggedIn' => true,
                'username'   => $user->username,
                'user_id'    => $user->id
            ]);
            return redirect()->to(base_url('/'));
        } else {
            return redirect()->to(base_url('login'))->with('error', 'Username atau password salah');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
