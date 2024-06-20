<?php

namespace App\Controllers;

use App\Models\Auth_m;


class AdminKominfoPlg extends BaseController
{

    public function index()
    {
        session();
        helper('form');
        return view('login');
    }

    public function prosesLogin()
    {
        $users = new Auth_m();
        $username = $this->request->getPost('username');
        $password = md5($this->request->getPost('password'));
        $dataUser = $users->where(['username' => $username])->first();

        if ($dataUser) {
            if ($password == $dataUser['password']) {
                session()->set([
                    'username' => $dataUser['username'],
                    'level' => $dataUser['level'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('admin'));
            } else {
                session()->setFlashdata('error', 'Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
}
