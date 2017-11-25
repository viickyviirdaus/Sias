<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_mapel extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		$this->load->model('Model_mapel');
		$this->load->library('session');
	}

	public function tampilMapel(){
		$data = $this->Model_mapel->tampilMapel();
		$param = array(
			'data' 	=> $data,
		);

		$this->load->view('headerAdmin');
		$this->load->view('AMataPelajaran', $param);//Tampil Mapel
		$this->load->view('footer');
	}

	public function ambilDataMapel($id){ //di dppl kurang ($id)
		$data = $this->Model_mapel->ambilDataMapel($id);
		$param = array(
			'data' 	=> $data,
		);

		$this->load->view('headerAdmin');
		$this->load->view('APerbaruiMataPelajaran', $param); //UbahDataMapel
		$this->load->view('footer');
	}

	public function ubahDataMapel(){
		$tabel = 'mata_pelajaran';
		$id = $this->input->post('id');
		$data = array(
			'nama_mata_pelajaran'	=> $this->input->post('nama_mapel'),
			'kkm'					=> $this->input->post('kkm'),
		);

		$this->Model_mapel->ubahDataMapel($id, $data, $tabel);

		$this->tampilMapel(); //Beda sama kyk yg di dppl, ganti dppl
	}

	
}
