<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookmarkModel;

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

    public function listBookmark($)
    {

        $data['title'] = 'Sistem Informasi Tapanuli Utara';
        $model = new BookmarkModel();

        $allValue = $model->where('id_user', $key)->findAll();

        return view('list', [
            "allValue" => $allValue,
            "data" => $data,
        ]);
    }
}
