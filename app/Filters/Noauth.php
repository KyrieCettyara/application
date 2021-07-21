<?php

namespace App\Filters;


use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Noauth implements FilterInterface
{
    public function before(RequestInterface $request, $argument = null)
    {
        if (session()->get('role') == 1) {
            return redirect()->to(base_url('admin'));
        }

        if (session()->get('role') == 2) {
            return redirect()->to(base_url('user'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //something
    }
}
