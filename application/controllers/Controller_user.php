<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_user extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		$this->load->model('Model_user');
		$this->load->model('Model_siswa');
		$this->load->model('Model_nilai');
		$this->load->library('session');
	}

	public function login($status){
		if ($status == 'admin') {
			$nip = $this->input->post('nip');
			$password = $this->input->post('psw');
			$where = array(
				'nip' => $nip,
				'password' => $password
				);
			var_dump($where);
			$data = $this->Model_user->loginAdmin("admin",$where)->result();
			$cek = $this->Model_user->loginAdmin("admin",$where)->num_rows();
			if($cek == 1){
				$data_session = array(
					'nama'		=> $data[0]->nama,
					'id_member' => $data[0]->id_admin,
					'status' 	=> "admin"
				);
				$this->session->set_userdata($data_session);
				$this->load->view('headerAdmin');
				$this->load->view('dashboardAdmin');
				$this->load->view('footer');
			}else{
				// $param = array(
				// 	'title' => 'Login',
				// 	'pesan'	=> "Username dan Password Salah!",
				// 	'status'=> $this->session->userdata('status'),
				// 	'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
				// 	'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
				// );
				
				// $this->load->view('header', $param);
				// $this->load->view('loginFail', $param);
				// $this->load->view('footer');
			}
		} elseif ($status == 'siswa') {
			$nis = $this->input->post('nis');
			$password = $this->input->post('psw');
			$id_kelas = 0;
			$cek = 0;
			$where = array(
				'nis' => $nis,
				'password' => $password
				);
			$data = $this->Model_user->loginSiswa("siswa",$where)->result();
			// var_dump($data);
			$id = $data[0]->id_siswa;
			// var_dump($id);
			$cek = $this->Model_user->loginSiswa("siswa",$where)->num_rows();
			if($cek == 1){
				$cekKelas = $this->Model_nilai->kelasSiswa($id);
				// var_dump($cekKelas);
				foreach ($cekKelas as $kunci) {
					$cek = $kunci->id_kelas;
					if($cek>$id_kelas){
						$id_kelas = $cek;
					}
				}
				// var_dump($id_kelas);
				$data_session = array(
					'nama'		=> $data[0]->nama_siswa,
					'id_member' => $data[0]->id_siswa,
					'status' 	=> "siswa"
				);
				$this->session->set_userdata($data_session);
				$data = $this->Model_nilai->tampilSemuaNilai($id,$id_kelas);
				$param = array(
					'data' 	=> $data,
					'idSiswa' => $id,
					'idKelas' => $id_kelas,
					'data_login' =>  $this->session->userdata(),
					);
				// var_dump($param);
				$this->load->view('headerWali');
				$this->load->view('WMNilaiHarian', $param);
				$this->load->view('footer');
				// $this->session->set_userdata($data_session);
				// $this->load->view('WMNilaiHarian');
			}else{
				// $param = array(
				// 	'title' => 'Login',
				// 	'pesan'	=> "Username dan Password Salah!",
				// 	'status'=> $this->session->userdata('status'),
				// 	'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
				// 	'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
				// );
				
				// $this->load->view('header', $param);
				// $this->load->view('loginFail', $param);
				// $this->load->view('footer');
			}
		} elseif ($status == 'waliKelas') {
			$nip = $this->input->post('nip');
			$password = $this->input->post('psw');
			$where = array(
				'nip' => $nip,
				'password' => $password
				);
			// var_dump($where);
			$data = $this->Model_user->loginWaliKelas("wali_kelas",$where)->result();
			$cek = $this->Model_user->loginWaliKelas("wali_kelas",$where)->num_rows();
			if($cek == 1){
				$data_session = array(
					'nama'		=> $data[0]->nama,
					'id_member' => $data[0]->id_wali_kelas,
					'status' 	=> "waliKelas"
				);
				$this->session->set_userdata($data_session);


				$idKelas = $data[0]->id_kelas;
				$data = $this->Model_siswa->getSiswa($idKelas);
				$param = array(
					'data' 	=> $data,
					'idKelas' => $idKelas,
					'data_login' =>$this->session->userdata(),
				);
				// var_dump($param);
				$this->load->view('headerWali');
				$this->load->view('WKDaftarSiswa', $param);
				$this->load->view('footer');

				// $this->session->set_userdata($data_session);
				// $this->load->view('WKDaftarSiswa');
			}else{
				// $param = array(
				// 	'title' => 'Login',
				// 	'pesan'	=> "Username dan Password Salah!",
				// 	'status'=> $this->session->userdata('status'),
				// 	'notifKomentar' => $this->modelKomentar->belumBaca($this->session->userdata('id_member'))->num_rows(),
				// 	'notifPesan' => $this->modelPesan->belumBaca($this->session->userdata('id_member'))->num_rows(),
				// );
				
				// $this->load->view('header', $param);
				// $this->load->view('loginFail', $param);
				// $this->load->view('footer');
			}
		}
	}


	public function logout(){
		var_dump($this->session->userdata('data_login'));
		if ($this->session->userdata('status') == 'admin') {
			$this->session->sess_destroy();
			redirect(base_url('index.php/Welcome/loginAdmin'));
		} elseif ($this->session->userdata('status') == 'siswa') {
			$this->session->sess_destroy();
			redirect(base_url('index.php/Welcome/'));
		} elseif ($this->session->userdata('status') == 'waliKelas') {
			$this->session->sess_destroy();
			redirect(base_url('index.php/Welcome/loginWaliKelas'));
		}
		
	}
}
