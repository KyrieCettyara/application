<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{

    public function login()
    {
        $data = [];
        $tittle['title'] = 'Login';

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email or Password didn't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {
                return view(
                    'landing_page',
                    $tittle,
                    ["validation" => $this->validator],
                );
            } else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))->first();

                //menyimpan nilai session
                $this->setUserSession($user);

                //redirect ke dashboard setelah login
                if ($user['role_id'] == 1) {
                    return redirect()->to(base_url('admin'));
                } elseif ($user['role_id'] == 2) {
                    return redirect()->to(base_url('/'));
                }
            }
        }
        return view('auth/login', $tittle);
    }

    private function setUserSession($user)
    {
        $data = [
            'name' => $user['name'],
            'id' => $user['id'],
            'email' => $user['email'],
            'password' => $user['password'],
            'role_id' => $user['role_id'],
            'is_active' => $user['id'],
            'date_created' => $user['id'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {

        $data['title'] = 'Sistem Informasi Tapanuli Utara';
        $session = session();
        $session->remove('isLoggedIn');
        $session->destroy();

        return view('landing_page', $data);
    }


    public function register()
    {
        $data = [];
        $tittle['title'] = 'Register';

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
                    'role_id' => 2,
                    'is_active' => 1,
                    'date_created' => time()
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to(base_url('login'));
            }
        }
        return view('auth/register', $tittle);
    }

    public function profile()
    {
        $data = [];
        $model = new UserModel();

        $data['user'] = $model->where('id', session()->get('id'))->first();
        return view('profile', $data);
    }
}
