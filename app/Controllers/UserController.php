<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role_id') != 2) {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view('Home/index');
    }
}
