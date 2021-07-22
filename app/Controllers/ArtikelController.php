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

        $allValue = $kulinerModel->where('id_jenis_artikel', 3)->findAll();

        return view('list', [
            "allValue" => $allValue,
            "data" => $data,
        ]);
    }

    public function artikelById($key = null)
    {
        $artikelModel = new ArtikelModel();

        $value = $artikelModel->where('id_artikel', $key)->first();
        $this->setArtikelSession($value);
        if (session()->get('role_id') == 1) {

            return view('admin/detail', [
                "value" => $value,
            ]);
        } else {

            return view('byId', [
                "value" => $value,
            ]);
        }
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
        session()->destroy();
        return view('landing_page', $data);
    }

    public function addArtikel()
    {
        $data['title'] = 'Tambah Artikel';
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
        ]);
    }

    public function editArtikel($id = null)
    {
        $data['title'] = 'Tambah Artikel';
        $model = new JenisArtikelModel();
        $modelArtikel = new ArtikelModel();


        $data = $model->findAll();
        $modelId = $modelArtikel->where("id_artikel", $id)->first();

        if ($this->request->getMethod() == "post") {

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

            $modelArtikel->update($id, $newData);

            $session = session();
            $session->setFlashdata("success", "Data updated successfully");
            return redirect()->to(base_url('admin'));
        }


        return view('admin/edit_artikel', [
            "modelId" => $modelId,
            "data" => $data,
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
