<?php

namespace App\Controllers;
use \App\Models\UserModel;

class Login extends BaseController
{
	public function __construct()
	{
	  $this->user = new UserModel();
	}

	public function index()
	{
		return view('login', [
			'session' => $this->session,
			'validation' => \Config\Services::validation()
		]);
	}

	public function auth()
	{
		if (!$this->validate([
			'username' => 'required',
			'password' => 'required'
		])) {
		return redirect()->to('/auth')->withInput();
		}

		$user = $this->request->getPost('username');
		$pass = $this->request->getPost('password');
		$auth = $this->user->where('username', $user)->first();
		if ($auth):
			if ($auth['password'] == $pass) {
				$this->session->set([
				'id' => $auth['id_user'],
				'nama' => $auth['nama'],
				'role' => $auth['role']
				]);
				if ($auth['role'] == 'admin') {
					return redirect()->to('/peserta');
				}
				else if ($auth['role'] == 'peserta') {
					return redirect()->to('/home');
				}
			}
			else {
				$this->session->setFlashdata('error', 'your username was not found !');
				return redirect()->to('/auth')->withInput();
			}
		else:
			$this->session->setFlashdata('error', 'your username was not found !');
			return redirect()->to('/auth')->withInput();
		endif;
	}
	public function logout()
	{
		$this->session->destroy();
    	return redirect()->to('/auth');
	}
}
