<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;

class AdminController extends BaseController
{

    public function __construct()
    {
        if (session()->get('role_id') != 1) {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        $data['title'] = 'Admin';
        return view("admin/dashboard");
    }

    public function addArtikel()
    {
        if ($this->request->getMethod() == "post") {
        }
    }
}
