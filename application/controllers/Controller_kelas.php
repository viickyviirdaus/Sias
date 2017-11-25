<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_kelas extends CI_Controller { //ganti nama controller, bkn controller login

	public function __construct(){
		
		parent::__construct();
		$this->load->model('Model_kelas');
		$this->load->library('session');
	}

	public function tampilKelas(){
		$data = $this->Model_kelas->tampilkelas();
		$param = array(
			'data' 	=> $data,
		);

		$this->load->view('headerAdmin');
		$this->load->view('AKelas', $param);//Tampil kelas
		$this->load->view('footer');
	}

		public function ambilDataKelas($id){ //di dppl kurang ($id)
		$data = $this->Model_kelas->ambilDataKelas($id);
		$siswa = $this->Model_kelas->ambilDataSiswaDalamKelas($id);
		$mapel = $this->Model_kelas->ambilDataMapelDalamKelas($id);
		$param = array(
			'data' 	=> $data,
			'siswa'	=> $siswa,
			'mapel'	=> $mapel,
		);

		$this->load->view('headerAdmin');
		$this->load->view('APerbaruiKelas', $param); //UbahDataMapel
		$this->load->view('footer');
	}
}
