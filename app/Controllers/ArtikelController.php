<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\BookmarkModel;
use App\Models\JenisArtikelModel;

class ArtikelController extends BaseController
{


    public function __construct()
    {
        helper('text');
    }

    public function listKuliner()
    {
        $data['title'] = 'Sistem Informasi Tapanuli Utara';
        $kulinerModel = new ArtikelModel();

        $allValue = $kulinerModel->where('id_jenis_artikel', 1)->findAll();

        return view('list', [
            "allValue" => $allValue,
            "data" => $data,
        ]);
    }

    public function listPariwisata()
    {
        $data['title'] = 'Sistem Informasi Tapanuli Utara';
        $kulinerModel = new ArtikelModel();

        $allValue = $kulinerModel->where('id_jenis_artikel', 3)->findAll();

        return view('list', [
            "allValue" => $allValue,
            "data" => $data,
        ]);
    }

    public function listTravel()
    {
        $data['title'] = 'Sistem Informasi Tapanuli Utara';
        $kulinerModel = new ArtikelModel();

        $allValue = $kulinerModel->where('id_jenis_artikel', 2)->findAll();

        return view('list', [
            "allValue" => $allValue,
            "data" => $data,
        ]);
    }

    public function listOleh()
    {
        $data['title'] = 'Sistem Informasi Tapanuli Utara';
        $kulinerModel = new ArtikelModel();

        $allValue = $kulinerModel->where('id_jenis_artikel', 4)->findAll();

        return view('list', [
            "allValue" => $allValue,
            "data" => $data,
        ]);
    }

    public function artikelById($key = null)
    {
        $data['title'] = 'Sistem Informasi Tapanuli Utara';
        $title['title'] = 'Sistem Informasi Tapanuli Utara';
        $artikelModel = new ArtikelModel();

        $value = $artikelModel->where('id_artikel', $key)->first();
        $this->setArtikelSession($value);
        if (session()->get('role_id') == 1) {

            return view('admin/detail', [
                "value" => $value,
                "title" => $title,
            ]);
        } else {

            $this->bookmarkIsExist($key);

            return view('byId', [
                "value" => $value,
                "data" => $data,
            ]);
        }
    }

    private function bookmarkIsExist($id_artikel)
    {
        $model = new BookmarkModel();
        $id_user = session()->get('id_user');

        $value = $model->bookmarkCheck($id_user, $id_artikel);

        if ($value == null) {
            $data = [

                'isExist' => false,

            ];
            session()->set($data);
        } else {
            $data = [

                'isExist' => true,
                'id_bookmark' => $value['id_bookmark']

            ];
            session()->set($data);
        }
    }

    public function setArtikelSession($value)
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
        $data['title'] = 'Sistem Informasi Tapanuli Utara';
        $bookmarkModel = new BookmarkModel();

        $allValue = [
            'title' =>  'Sistem Informasi Tapanuli Utara',
            'id_user' => session()->get('id_user'),
            'id_artikel' => session()->get('id_artikel'),
        ];

        $bookmarkModel->save($allValue);

        return redirect()->back();
    }

    public function addArtikel()
    {
        $data['title'] = 'Tambah Artikel';
        $title['title'] = "Tambah Artikel";
        $model = new JenisArtikelModel();

        $data = $model->findAll();

        if ($this->request->getMethod() == 'post') {

            $model = new ArtikelModel();

            $file = $this->request->getFile('gambar');

            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $file->move('upload/', $imageName);
            }


            $newData = [
                'id_jenis_artikel' => $this->request->getVar('id_jenis_artikel'),
                'gambar' => $imageName,
                'judul_artikel' => $this->request->getVar('judul_artikel'),
                'isi_artikel' => $this->request->getVar('isi_artikel'),

            ];

            $model->save($newData);
            $session = session();
            $session->setFlashdata('success', 'Successful Registration');
            return redirect()->to(base_url('admin'));
        }


        return view('admin/add_artikel', [
            "data" => $data,
            "title" => $title,
        ]);
    }

    public function editArtikel($id = null)
    {
        $data['title'] = 'Tambah Artikel';
        $title['title'] = 'Sistem Informasi Tapanuli Utara';
        $model = new JenisArtikelModel();
        $modelArtikel = new ArtikelModel();


        $data = $model->findAll();
        $modelId = $modelArtikel->where("id_artikel", $id)->first();
        $imageName = $modelId['gambar'];

        if ($this->request->getMethod() == "post") {

            $file = $this->request->getFile('gambar');

            if ($file != null) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $imageName = $file->getRandomName();
                    $file->move('upload/', $imageName);
                }
            }

            $newData = [
                'id_jenis_artikel' => $this->request->getVar('id_jenis_artikel'),
                'gambar' => $imageName,
                'judul_artikel' => $this->request->getVar('judul_artikel'),
                'isi_artikel' => $this->request->getVar('isi_artikel'),

            ];

            $modelArtikel->update($id, $newData);

            $session = session();
            $session->setFlashdata("success", "Data updated successfully");
            return redirect()->back();
        }


        return view('admin/edit_artikel', [
            "modelId" => $modelId,
            "data" => $data,
            "title" => $title,
        ]);
    }

    public function deleteArtikel($id)
    {
        $model = new ArtikelModel();

        $artikel = $model->delete($id);

        $session = session();

        $session->setFlashdata("success", "Artikel Berhasil Dihapus");

        return redirect()->to(base_url('admin'));
    }
}
