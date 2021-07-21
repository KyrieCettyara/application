<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = 'Sistem Informasi Tapanuli Utara';
		return view('landing_page', $data);
	}

	public function search()
	{
		$data['title'] = 'Sistem Informasi Tapanuli Utara';
		$pager = \Config\Services::pager();
		$model = new ArtikelModel();
		$keyword = $this->request->getVar('cari');

		if ($keyword) {
			$query = $model->search($keyword);
		} else {
			$query = $model;
		}

		$data['artikel'] = $query->paginate(10);
		$data['pager'] = $model->pager;
		$data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;

		return view('list_search', $data);
	}
}
