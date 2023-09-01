<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {

    }

    public function login()
    {
        if (session('user_id')) {
            return redirect()->to(site_url('average-income'));
        } else {
            return view('auth/login');
        }
    }

    public function loginProcess() {
        $post         = $this->request->getPost();
        $query        = $this->db->table('ms_user')->getWhere(['username' => $post['username']]);
        $user         = $query->getRow();

        if ($user) {
            if ($user->status == 1) {
                if (password_verify($post['password'], $user->password)) {
                    $params = ['user_id' => $user->id, 'username' => $user->username];
                    session()->set($params);
                    return redirect()->to(site_url('average-income'));
                } else {
                    return redirect()->back()->with('error', 'Password salah!');
                }
            } else {
                return redirect()->back()->with('error', 'Username belum terverifikasi!');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ada!');
        }
    }

    public function logoutProcess() {
        $data = array('user_id', 'username');
        session()->remove($data);
        return redirect()->to(site_url('/'));
    }
}
