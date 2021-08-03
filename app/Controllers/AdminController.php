<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ArtikelModel;

class AdminController extends BaseController
{


    public function __construct()
    {
        if (session()->get('role_id') != 1) {
            echo 'Access denied';
            exit;
        }
        helper('text');
    }
    public function index()
    {
        $model = new ArtikelModel();
        $data['title'] = 'Admin';
        $title['title'] = "List Semua Artikel";

        $data = $model->findAll();

        return view('admin/list', [
            "data" => $data,
            "title" => $title,
        ]);
    }


    public function listKuliner()
    {
        $title['title'] = "List Kuliner";
        $kulinerModel = new ArtikelModel();

        $data = $kulinerModel->where('id_jenis_artikel', 1)->findAll();

        return view('admin/list', [
            "data" => $data,
            "title" => $title,
        ]);
    }

    public function listPariwisata()
    {
        $title['title'] = "List Pariwisata";
        $kulinerModel = new ArtikelModel();

        $data = $kulinerModel->where('id_jenis_artikel', 3)->findAll();

        return view('admin/list', [
            "data" => $data,
            "title" => $title,
        ]);
    }

    public function listTravel()
    {
        $title['title'] = "List Travel";
        $kulinerModel = new ArtikelModel();

        $data = $kulinerModel->where('id_jenis_artikel', 2)->findAll();

        return view('admin/list', [
            "title" => $title,
            "data" => $data,
        ]);
    }

    public function listOleh()
    {
        $title['title'] = "List Oleh-Oleh";
        $kulinerModel = new ArtikelModel();

        $data = $kulinerModel->where('id_jenis_artikel', 4)->findAll();

        return view('admin/list', [
            "title" => $title,
            "data" => $data,
        ]);
    }
}
