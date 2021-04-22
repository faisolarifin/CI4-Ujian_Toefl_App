<?php

namespace App\Controllers;
use \App\Models\UserModel;
use \App\Models\BagianModel;
use \App\Models\SoalModel;
use \App\Models\TopikModel;
use \App\Models\TesModel;

class Admin extends BaseController
{
	public function __construct()
	{
		$session = \Config\Services::session();
		if (!$session->has('id') || $session->role != 'admin') {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
			die;
		}	
		$this->user = new UserModel();
		$this->bagian = new BagianModel();
		$this->soal = new SoalModel();
		$this->topik = new TopikModel();
		$this->tes = new TesModel();
	}

	public function index()
	{
		$result = $this->user->where('role !=', 'admin');
		if ($this->request->getGet('q'))
		{
			$result = $this->user->search($this->request->getGet('q') ?? '');
		}
		return view('admin/peserta/data', [
			'user' => $result->orderBy('id_user', 'desc')->paginate(10, 'user'),
			'pager' => $this->user->pager,
		]);
	}

	public function tambahPeserta()
	{
		return view('admin/peserta/tambah', [
			'val' => \Config\Services::validation()
		]);
	}

	public function savePeserta()
	{
		if (!$this->validate([
			'nama' => 'required',
			'uname' => 'required|min_length[4]|is_unique[t_user.username]',
			'pass' => 'required|min_length[4]'
		])) {
			return redirect()->to('/peserta/tambah')->withInput();
		}
		$this->user->insert([
			'nama' => $this->request->getPost('nama'),
			'username' => $this->request->getPost('uname'),
			'password' => $this->request->getPost('pass'),
			'role' => 'peserta'
		]);
		$userID = $this->user->insertID;
		for ($i=1; $i<=3; $i++) {
			$this->tes->insert([
				'id_user' => $userID,
				'id_bagian' => $i,
				'status' => 'ready',
			]);
		}
		return redirect()->to('/peserta');
	}

	public function deletePeserta($id='')
	{
		$this->user->delete($id);
		return redirect()->to('/peserta');
	}

	public function editPeserta($id='')
	{
		return view('admin/peserta/edit', [
			'user' => $this->user->find($id)
		]);
	}

	public function updatePeserta()
	{
		$this->user->update($this->request->getPost('id'),[
			'nama' => $this->request->getPost('nama'),
			'username' => $this->request->getPost('uname'),
			'password' => $this->request->getPost('pass'),
			'role' => 'peserta'
		]);
		return redirect()->to('/peserta');
	}

	public function dataSection()
	{
		return view('admin/section/data', [
			'section' => $this->bagian->findAll(),
		]);
	}
	public function editSection($id='')
	{
		return view('admin/section/edit', [
			'b' => $this->bagian->find($id)
		]);
	}
	public function updateSection()
	{
		$this->bagian->update($this->request->getPost('id'),[
			'nm_section' => $this->request->getPost('nm_s'),
			'limit_time' => $this->request->getPost('time'),
			'keterangan' => $this->request->getPost('ket'),
			'direction' => $this->request->getPost('dirc')
		]);
		return redirect()->to('/bagian');
	}
	public function dataSoal($t=1)
	{
		return view('admin/soal/data', [
			'soal' => $this->soal->getSoal()->where(['t_soal.id_bagian' => $t])->paginate(10, 'user'),
			'pager' => $this->soal->pager,
		]);
	}

	public function tambahSoal()
	{
		return view('admin/soal/tambah', [
			'validation' => \Config\Services::validation(),
			'topik' => $this->bagian->find() 
		]);
	}

	public function saveSoal()
	{
		$this->soal->insert([
			'id_topik' => $this->request->getPost('topik'),
			'id_bagian' => $this->request->getPost('section'),
			'no_soal' => $this->request->getPost('no'),
			'soal' => $this->request->getPost('soal'),
			'opsi_a' => $this->request->getPost('a'),
			'opsi_b' => $this->request->getPost('b'),
			'opsi_c' => $this->request->getPost('c'),
			'opsi_d' => $this->request->getPost('d'),
			'jawaban' => $this->request->getPost('jawab'),
		]);
		return redirect()->to('/soal');
	}

	public function deleteSoal($id='')
	{
		$this->soal->delete($id);
		return redirect()->to('/soal');
	}

	public function editSoal($id='')
	{
		return view('admin/soal/edit', [
			's' => $this->soal->getSoal()->find($id),
			'topik' => $this->bagian->find()
		]);
	}

	public function updateSoal()
	{
		$this->soal->update($this->request->getPost('id'),[
			'id_topik' => $this->request->getPost('topik'),
			'id_bagian' => $this->request->getPost('section'),
			'no_soal' => $this->request->getPost('no'),
			'soal' => $this->request->getPost('soal'),
			'opsi_a' => $this->request->getPost('a'),
			'opsi_b' => $this->request->getPost('b'),
			'opsi_c' => $this->request->getPost('c'),
			'opsi_d' => $this->request->getPost('d'),
			'jawaban' => $this->request->getPost('jawab'),
		]);
		return redirect()->to('/soal');
	}
	
	public function dataTopik($b=1)
	{
		if ($this->request->getGet('q')) {
			$result = $this->topik->like('nm_topik', $this->request->getGet('q'));
		}
		else {
			$result = $this->topik;
		}
		$view = ($b==2) ? 'data_sound' : 'data_article';
		return view('admin/topik/'.$view , [
			'topik' => $result->where('id_bagian', $b)->paginate(5, 'topik'),
			'pager' => $this->topik->pager,
		]);
	}

	public function deleteArticle($id='')
	{
		$this->topik->delete($id);
		return redirect()->to('/topik');
	}

	public function tambahTopik($b='')
	{
		$view = ($b==2) ? 'tambah_sound' : 'tambah_article';
		return view('admin/topik/'.$view, [
			'val' => \Config\Services::validation(),
		]);
	}

	public function editTopik($b, $id='')
	{
		$view = ($b==2) ? 'edit_sound' : 'edit_article';
		return view('admin/topik/'.$view, [
			't' => $this->topik->find($id),
		]);
	}

	public function saveArticle()
	{
		if (!$this->validate([
			'nama' => 'required',
			'article' => 'required',
		])) {
			return redirect()->to('/topik/article/tambah')->withInput();
		}
		$this->topik->insert([
			'id_bagian' => 1,
			'nm_topik' => $this->request->getPost('nama'),
			'content' => $this->request->getPost('article'),
		]);
		return redirect()->to('/topik');
	}

	public function saveSound()
	{
		if (!$this->validate([
			'nama' => 'required',
			'sound' => 'uploaded[sound]|ext_in[sound,mp3,wav]',
		])) {
			return redirect()->to('/topik/sound/tambah')->withInput();
		}
		$sound = $this->request->getFile('sound');
		if ($sound->getError() == 0) {
			$sound->move('listening');
		  }
		$this->topik->insert([
			'id_bagian' => 2,
			'nm_topik' => $this->request->getPost('nama'),
			'content' => $sound->getName(),
		]);
		return redirect()->to('/topik/sound');
	}

	public function deleteSound($id='')
	{
		unlink('listening/'.$this->topik->find($id)['content']);
		$this->topik->delete($id);
		return redirect()->to('/topik/sound');
	}

	public function updateArticle()
	{
		$this->topik->update($this->request->getPost('id'), [
			'id_bagian' => 1,
			'nm_topik' => $this->request->getPost('nama'),
			'content' => $this->request->getPost('article'),
		]);
		return redirect()->to('/topik');
	}

	public function updateSound()
	{
		$id = $this->request->getPost('id');
		$fileName = $this->topik->find($id)['content'];
		$sound = $this->request->getFile('sound');
		if ($sound->getError() == 0) {
			unlink('listening/'.$fileName);
			$sound->move('listening');
			$fileName = $sound->getName();
		  }
		$this->topik->update($id, [
			'id_bagian' => 2,
			'nm_topik' => $this->request->getPost('nama'),
			'content' => $fileName,
		]);
		return redirect()->to('/topik/sound');
	}

	public function Hasil()
	{
		if ($this->request->getGet('q')) {
			$result = $this->user->getHasil()->where('tgl_start', $this->request->getGet('q'));
		}
		else{
			$result = $this->user->getHasil();
		}
		return view('admin/hasil' , [
			'hasil' => $result->paginate(30, 'hasil'),
			'pager' => $this->user->pager,
		]);
	}

	
	public function getTopicBySection($id='')
	{
		echo json_encode($this->topik->where('id_bagian', $id)->find());
	}



}
