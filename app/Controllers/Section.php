<?php

namespace App\Controllers;
use \App\Models\SoalModel;
use \App\Models\JawabModel;
use \App\Models\TesModel;
use \App\Models\BagianModel;

class Section extends BaseController
{

	public function __construct()
	{
		$session = \Config\Services::session();
		if (!$session->has('id')) {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
			die;
		}
		$this->soal = new SoalModel();
		$this->jawab = new JawabModel();
		$this->tes = new TesModel();
		$this->bagian = new BagianModel();
	}

	protected function setSessionSection()
	{
		$idtes = $this->request->getPost('idtes');
		if ($idtes === null) return redirect()->to('/section');

		$this->session->set('idtes', $idtes);
		$this->session->set('idsection', $this->request->getPost('idbagian'));
	}
	
	public function index()
	{
		return view('home');
	}
	public function bagian()
	{
		return view('list_section', [
			'data' => $this->tes->getSection($this->session->id)->findAll()
		]);
	}
	public function score()
	{
		$score = 0;
		$sc = $this->tes->where(['id_user' => $this->session->id])->findColumn('jml_benar');
		foreach($sc as $s)
		{
			if ($s == "") {
				$score = "not finished";
				break;
			}
			else $score += $s;
		}
		if ($score !== "not finished") $score = ceil(($score / 3) * 10). '/300';

		return view('score', [
			'data' => $this->tes->getSection($this->session->id)->findAll(),
			'score' => $score
		]);
	}
	
	public function continue()
	{
		$this->setSessionSection();
		return redirect()->to('/exam');
	}

	public function direction()
	{
		$this->setSessionSection();
		return view('direction', [
			'data' => $this->tes->getSectionById($this->session->idtes)
		]);
	}

	public function start()
	{
		if ($this->tes->update($this->session->idtes, [
			'tgl_start' => date('Y-m-d H:i:s'),
			'status' => 'start',
		])) {
			return redirect()->to('/exam');
		}
	}

	public function finish()
	{
		$this->tes->update($this->session->idtes, [
			'jml_benar' => $this->jawab->where(['id_tes' => $this->session->idtes, 'eval' => 'benar'])->countAllResults(),
			'tgl_finish' => date('Y-m-d H:i:s'),
			'status' => 'finish',
		]);
		//hapus session
		$this->session->remove('idtes');
		$this->session->remove('idsection');
		return redirect()->to('/section');
	}

	public function exam($no=1)
	{
		if ($this->session->idtes==null || $this->session->idsection==null) { 
			return redirect()->to('/section'); 
		} 
		
		$idsection = $this->session->idsection;
		if ($this->tes->where('id_tes', $this->session->idtes)->findColumn('status')[0] !== 'start') return;
		
		if ($no <= 0) {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
			return;
		}

		$banyak_soal = $this->soal->where(['id_bagian' => $idsection])->countAllResults();
		if ($no > $banyak_soal) {
			return view('finish_section', [
				'n_soal' => $banyak_soal
			]);
		}
		
		$data['no'] = $no;
		$data['limit'] = $this->bagian->where('id_bagian', $this->session->idsection)->findColumn('limit_time')[0];
		$data['data'] = $this->soal->getSoal()->where(['no_soal' => $no, 't_soal.id_bagian' => $idsection])->first();
		$data['jawab'] = $this->jawab->where([
			'id_tes' => $this->session->idtes,
			'id_soal' => $data['data']['id_soal']
		])->findColumn('jawaban')[0] ?? '';

		if ($idsection == 1) return view('reading_sheet', $data);
		else if ($idsection == 2) return view('listening_sheet', $data);
		else if ($idsection == 3) return view('grammar_sheet', $data);

	}

	public function save($no='')
	{
		$idtes = $this->session->idtes;
		if ($idtes===null) return;

		if ($this->request->getPost('next')) ++$no;
		elseif ($this->request->getPost('back')) --$no;

		$eval = 'salah';
		$id_soal = $this->request->getPost('id_soal') ?? '';
		$jawaban = $this->request->getPost('jawaban') ?? '';
		if ($this->soal->where(['id_soal' => $id_soal])->findColumn('jawaban')[0] === $jawaban) 	$eval = 'benar';
	
		if ($this->jawab->where(['id_tes' => $idtes, 'id_soal' => $id_soal])->countAllResults() > 0) {
			$this->jawab->where([
				'id_tes' => $idtes,  //nanti pake session
				'id_soal' => $id_soal
			])->update(
			[ 'id_tes' => $idtes ],  //nanti pake session	
			[
				'id_soal' => $id_soal,
				'jawaban' => $jawaban,
				'eval' => $eval
			]);
		}
		else {
			$this->jawab->insert([
				'id_tes' => $idtes,  
				'id_soal' => $id_soal,
				'jawaban' => $jawaban,
				'eval' => $eval
			]);
		}
		return redirect()->to('/exam/'. $no);
	}

}
