<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_siswa extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		$this->load->model('Model_siswa');
		$this->load->library('session');
	}

	public function tampilSiswaAktif(){
		$data = $this->Model_siswa->tampilSiswaAktif();
		$param = array(
			'data'			=> $data,
		);
		$this->load->view('headerAdmin');
		$this->load->view('ASiswaAktif', $param);//TampilSiswa
		$this->load->view('footer');
	}

	public function tampilSiswaTidakAktif(){
		$data = $this->Model_siswa->tampilSiswaTidakAktif();
		$param = array(
			'data'			=> $data,
		);
		$this->load->view('headerAdmin');
		$this->load->view('ASiswaTidakAktif', $param);//TampilSiswaTidakAktif
		$this->load->view('footer');
	}

	public function nonaktifkanAkunSiswa($id){ //di dppl kurang ($id)
		$this->Model_siswa->nonaktifkanAkunSiswa($id);

		$this->tampilSiswaAktif();
	}

	public function ambilDataSiswa($id){ //di dppl kurang ($id)
		$this->Model_siswa->ambilDataSiswa($id);
		
		$this->load->view('headerAdmin');
		$this->load->view('UbahDataSiswa'); //Belum front endnya
		$this->load->view('footer');
	}

	public function ubahDataSiswa(){ 
		$this->Model_siswa->ubahDataSiswa($id, $data, $tabel);
		
		$this->load->view('headerAdmin');
		$this->load->view('UbahDataSiswa'); //Belum front endnya
		$this->load->view('footer');
	}

	public function tambahAkunaSiswa(){
		$this->Model_siswa->tambahAkunaSiswa($data, $tabel);
		
		$this->load->view('headerAdmin');
		$this->load->view('dashboardAdmin');
		$this->load->view('footer');
	}
}
