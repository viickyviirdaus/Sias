<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_kelas extends CI_Controller { //ganti nama controller, bkn controller login

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_kelas');
		$this->load->model('Model_mapel');
		$this->load->model('Model_siswa');
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
			$kelas = $this->Model_kelas->ambilDataKelas($id);
			$param = array(
				'id_kelas' => $id,
				'nama_kelas' => $kelas->nama_kelas,
				'cari'	=> false,
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

	public function tambahSiswaDalamKelas(){
		$tabel = 'anggota_kelas';
		$id_kelas = $this->input->post('id');
		$kelas = $this->Model_kelas->ambilDataKelas($id_kelas);
		$siswa = $this->Model_siswa->ambilDataSiswa($this->input->post('nis'));
		$data = array(
			'id_kelas' 		=> $id_kelas,
			'nama_kelas' => $kelas->nama_kelas,
			'id_siswa'		=> $siswa->id_siswa,
			'tahun_ajaran' 	=> $kelas->tahun_ajaran
		);
		$this->Model_kelas->tambahSiswaDalamKelas($data, $tabel);
		$this->ambilDataKelas($id_kelas,'dataSiswaMapel');
	}

	public function hapusSiswaDalamKelas($id_siswa,$id_kelas){
		$tabel = 'anggota_kelas';
		$this->Model_kelas->hapusSiswaDalamKelas($id_kelas, $id_siswa, $tabel);
		$this->ambilDataKelas($id_kelas,'dataSiswaMapel');
	}

	public function tambahMapelDalamKelas(){
		$tabel = 'detail_mata_pelajaran';
		$id_kelas = $this->input->post('id');
		$mapel = $this->Model_mapel->ambilDataMapelByNama($this->input->post('mapel'));
		$data = array(
			'id_kelas' 				=> $id_kelas,
			'nama_kelas' => $kelas->nama_kelas,
			'id_mata_pelajaran'		=> $mapel->id_mata_pelajaran
		);
		$this->Model_kelas->tambahSiswaDalamKelas($data, $tabel);
		$this->ambilDataKelas($id_kelas,'dataSiswaMapel');
	}

	public function hapusMapelDalamKelas($id_mata_pelajaran,$id_kelas){
		$tabel = 'detail_mata_pelajaran';
		$this->Model_kelas->hapusSiswaDalamKelas($id_kelas, $id_mata_pelajaran, $tabel);
		$this->ambilDataKelas($id_kelas,'dataSiswaMapel');
	}
}