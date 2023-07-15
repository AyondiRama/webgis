<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data = [];
        $data['validation'] = null;

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];

            if ($this->validate($rules)) {
                $username = $this->request->getVar('username');
                $password = $this->request->getVar('password');

                // Cek username dan password yang diberikan
                if ($username === 'admin' && $password === 'admin') {
                    session()->set('logged_in', true);
                    return redirect()->to(base_url('home/dashboard'));
                } else {
                    $data['error'] = 'Username atau password salah';
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        echo view('login', $data);
    }

    public function logout()
    {
        session()->remove('logged_in');
        return redirect()->to('login');
    }
}
