<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookmarkModel;
use App\Models\ArtikelModel;
use App\Controllers\ArtikelController;

class UserController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role_id') != 2) {
            $session = session()->get('role_id');
            echo $session;
            exit;
        }

        helper('text');
    }
    public function index()
    {
        return view('Home/index');
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

    public function listBookmark()
    {

        $key['key'] = session()->get('id');

        $data['title'] = 'Sistem Informasi Tapanuli Utara';
        $model = new BookmarkModel();


        $allValue = $model->getBookmark($key);

        return view('listBookmark', [
            "allValue" => $allValue,
            "data" => $data,
        ]);
    }

    public function bookmarkById($key = null)
    {
        $data['title'] = 'Sistem Informasi Tapanuli Utara';
        $model = new BookmarkModel();


        $allValue = $model->getBookmarkDetail($key);

        return view('bookmarkDetail', [
            "allValue" => $allValue,
            "data" => $data,
        ]);
    }

    public function deleteBookmark($id)
    {
        $model = new BookmarkModel();;

        $artikel = $model->delete($id);

        $session = session();

        $session->setFlashdata("success", "Artikel Berhasil Dihapus");

        return redirect()->to(base_url('bookmark'));
    }
}
