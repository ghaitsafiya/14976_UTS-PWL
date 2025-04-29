<?php

namespace App\Controllers;

//DashboardController untuk dashboard berdasarkan role
class DashboardController extends BaseController
{
    public function index()
    {
        if (session()->get('role') == 'admin') //Cek jika role session = admin
        {
            return view('admin/admin_dashboard');  //Tampilkan view admin dashboard
        } 
        elseif (session()->get('role') == 'user') //Jika role user
        {
            return view('user/user_dashboard'); //Tampilkan view user dashboard
        } 
        else
        {
            return redirect()->to('/'); //Jika tidak ada session, redirect ke login
        }
    }
}