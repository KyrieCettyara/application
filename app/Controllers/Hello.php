<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Hello extends BaseController
{

    public function index()
    {
        $this->load->model('m_mhs');
        $data['mahasiswa'] = $this->m_mhs->get_data();

        $this->load->view('try', $data);
    }
}
