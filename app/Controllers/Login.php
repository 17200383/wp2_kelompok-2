<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function getIndex()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('templates/header', $data)
            . view('pages/login', $data)
            . view('templates/footer', $data);
    }

    public function postLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $UserModel = new UserModel();

        $user = $UserModel->verify($username);

        if ($user && password_verify($password, $user['password'])) {

            session()->set('logged_in', true);
            $privilege = $user['privilege'];

            if ($privilege == 1) {
                return redirect()->to('/admin');
            } elseif ($privilege == 2) {
                return redirect()->to('/dashboard');
            } elseif ($privilege == 3) {
                return redirect()->to('/doctor');
        }
        echo 'Failed Login!';
        return redirect()->to('login');
        }
    }
}