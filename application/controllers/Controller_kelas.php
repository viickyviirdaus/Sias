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

	public function ambilDataKelas($id,$ket){ //di dppl kurang ($id)
		if ($ket == 'dataKelas') {
			$data = $this->Model_kelas->ambilDataKelas($id);
			$param = array(
				'data' 	=> $data,
			);


			$this->load->view('headerAdmin');
			$this->load->view('APerbaruiKelas', $param); //UbahDataMapel
			$this->load->view('footer');
		} elseif ($ket == 'dataSiswaMapel') {
			$siswa = $this->Model_kelas->ambilDataSiswaDalamKelas($id);
			$mapel = $this->Model_kelas->ambilDataMapelDalamKelas($id);
			$param = array(
				'siswa'	=> $siswa,
				'mapel'	=> $mapel,
			);


			$this->load->view('headerAdmin');
			$this->load->view('APerbaruiSiswaMapelDalamKelas', $param); //UbahDataMapel
			$this->load->view('footer');
		}

		
	}

	public function ubahDataKelas(){
		$tabel = 'kelas';
		$id = $this->input->post('id');
		$data = array(
			'nama_kelas'	=> $this->input->post('nama'),
			'ruang_kelas'	=> $this->input->post('ruang'),
			'tahun_ajaran'	=> $this->input->post('tahun'),
		);

		$this->Model_kelas->ubahDataKelas($id, $data, $tabel);

		$this->tampilKelas(); //Beda sama kyk yg di dppl, ganti dppl
	}

	public function tambahKelas(){
		$tabel = 'kelas';
		$data = array(
			'nama_kelas'	=> $this->input->post('nama'),
			'ruang_kelas'	=> $this->input->post('ruang'),
			'tahun_ajaran'	=> $this->input->post('tahun'),
		);
		$this->Model_kelas->tambahKelas($data, $tabel);
		$this->tampilKelas();
	}
}
