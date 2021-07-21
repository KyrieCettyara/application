<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\BookmarkModel;

class ArtikelController extends BaseController
{


    public function __construct()
    {
        helper('text');
    }

    public function listKuliner()
    {
        $kulinerModel = new ArtikelModel();

        $allValue = $kulinerModel->where('id_jenis_artikel', 1)->findAll();
        return view('list', [
            "allValue" => $allValue,
        ]);
    }

    public function kulinerById($key = null)
    {
        $kulinerModel = new ArtikelModel();

        $value = $kulinerModel->where('id_artikel', $key)->first();
        $this->setArtikelSession($value);

        return view('byId', [
            "value" => $value,
        ]);
    }

    private function setArtikelSession($value)
    {
        $data = [
            'id_user' => 13,
            'id_artikel' => $value['id_artikel'],
            'judul_artikel' => $value['judul_artikel'],
            'isi_artikel' => $value['isi_artikel']
        ];

        session()->set($data);
        return true;
    }

    public function bookmark()
    {
        $bookmarkModel = new BookmarkModel();

        $data = [
            'title' =>  'Sistem Informasi Tapanuli Utara',
            'id_user' => session()->get('id_user'),
            'id_artikel' => session()->get('id_artikel'),
        ];

        $bookmarkModel->save($data);
        return view('landing_page', $data);
    }
}
