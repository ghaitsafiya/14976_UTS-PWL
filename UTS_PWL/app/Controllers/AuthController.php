<?php

namespace App\Controllers;

//AuthController untuk login/logout
class AuthController extends BaseController
{
    //Buka halaman login
    public function login()
    {
        return view('auth/login'); //Menampilkan view login di folder auth/login.php
    }

    //Proses Login
    public function doLogin()
    {
        $session = session(); //Mengaktifkan session CodeIgniter 4
        $username = $this->request->getPost('username'); //Mengambil input username dari form POST
        $password = $this->request->getPost('password'); //Mengambil input password dari form POST

        //Membuat array hardcode username dan password
        $users = [
            'admin' => [
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role' => 'admin'
            ],
            'user' => [
                'password' => password_hash('user123', PASSWORD_DEFAULT),
                'role' => 'user'
            ],
        ];

        foreach ($users as $user => $data) {
            //Melakukan looping data user
            if ($username == $user && password_verify($password, $data['password'])) //Cek apakah username cocok dan password cocok
            {
                //Set session dengan username dan role
                $session->set([
                    'username' => $username,
                    'role' => $data['role'],
                    'logged_in' => true
                ]);
                return redirect()->to('/dashboard'); //Jika login berhasil, arahkan ke dashboard
            }
        }
        return redirect()->to('/')->with('error', 'Username atau Password salah.'); //Jika gagal login, kembali ke halaman login dengan error
    }

    //fungsi logout
    public function logout()
    {
        session()->destroy(); //Menghapus semua session
        return redirect()->to('/'); //Kembali ke halaman login
    }
}
