<?php

namespace App\Controllers;

class User extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->validation = \Config\Services::validation();
		$this->session = session();
	}

	public function index()
	{
		$model = new \App\Models\UserModel();

		$data = [
			'users' => $model->paginate(10),
			'pager' => $model->pager,
		];

		return view('user/index', [
			'data' => $data,
		]);
	}

	public function view()
	{
		$id = $this->request->uri->getSegment(3);

		$userModel = new \App\Models\UserModel();

		$user = $userModel->find($id);

		return view('user/view', [
			'user' => $user,
		]);
	}



	public function editprofile()
	{
		$id = $this->request->uri->getSegment(3);

		$userModel = new \App\Models\UserModel();

		$user = $userModel->find($id);

		if ($this->request->getPost()) {
			$data = $this->request->getPost();
			$this->validation->run($data, 'userupdate');
			$errors = $this->validation->getErrors();

			if (!$errors) {
				$c = new \App\Entities\User();
				$c->id = $id;
				$c->fill($data);

				if ($this->request->getFile('avatar')->isValid()) {
					$c->avatar = $this->request->getFile('avatar');
				}
				$c->fullname = $this->request->getPost('fullname');
				$c->email = $this->request->getPost('email');

				$c->updated_by = $this->session->get('id');
				$c->updated_date = date("Y-m-d H:i:s");

				$userModel->save($c);
				$segments = ['User', 'view', $id];
				print_r('bisa');
				return redirect()->to(base_url($segments));
			}
			print_r('ngga bisa');
		}

		return view('user/editprofile', [
			'user' => $user,
		]);
	}

	public function delete()
	{
		$id = $this->request->uri->getSegment(3);

		$userBarang = new \App\Models\UserModel();
		$delete = $userBarang->delete($id);

		return redirect()->to(site_url('user/index'));
	}
}
