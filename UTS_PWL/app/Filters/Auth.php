<?php

namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        if (!session()->get('logged_in')) {
            return redirect()->to('/');
        }

        $role = session()->get('role');
        $uri = current_url();

        if (strpos($uri, 'admin') !== false && $role != 'admin') {
            return redirect()->to('/user');
        }

        if (strpos($uri, 'user') !== false && $role != 'user') {
            return redirect()->to('/admin');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}