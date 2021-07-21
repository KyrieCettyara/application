<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

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


    public function addAdminAcc()
    {
        $data['title'] = 'Tambah Artikel';



        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = [
                'name' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];

            if (!$this->validate($rules)) {

                return view('auth/register', [
                    "validation" => $this->validator,
                ]);
            } else {
                $model = new UserModel();

                $newData = [
                    'name' => $this->request->getVar('name'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                    'role_id' => 1,
                    'is_active' => 1,
                    'date_created' => time()
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to(base_url('admin'));
            }
        }
        return view('add_artikel', $data);
    }
}
