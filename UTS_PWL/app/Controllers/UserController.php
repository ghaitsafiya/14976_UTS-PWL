<?php

namespace App\Controllers;

class UserController extends BaseController{
    public function index(){
        //Hardcoded user list
        $users = [
            ['username' => 'admin', 'role' => 'admin'],
            ['username' => 'user', 'role' => 'user']
        ];

        $data['users'] = $users;
        return view('admin/user_list', $data);
    }
}