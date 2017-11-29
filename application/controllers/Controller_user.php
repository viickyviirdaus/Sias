<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_user extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		$this->load->model('Model_user');
		$this->load->library('session');
	}

	public function login($status){
		if ($status == 'admin') {
			$nip = $this->input->post('nip');
			$password = $this->input->post('psw');
			$where = array(
				'nip' 		=> $nip,
				'password' 	=> $password
				);
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
				$param = array(
					'login' => 'fail',
				);
				
				$this->load->view('loginAdmin', $param);
			}
		} elseif ($status == 'siswa') {
			$nis = $this->input->post('nis');
			$password = $this->input->post('psw');
			$where = array(
				'nis' 		=> $nis,
				'password' 	=> $password
				);
			var_dump($where);
			$data = $this->Model_user->loginSiswa("siswa",$where)->result();
			$cek = $this->Model_user->loginSiswa("siswa",$where)->num_rows();
			if($cek == 1){
				$data_session = array(
					'nama'		=> $data[0]->nama_siswa,
					'id_member' => $data[0]->id_siswa,
					'status' 	=> "siswa"
				);
				$this->session->set_userdata($data_session);
				$this->load->view('WMNilaiHarian');
			}else{
				$param = array(
					'login' => 'fail',
				);
				$this->load->view('loginSiswa', $param);
			}
		} elseif ($status == 'waliKelas') {
			$nip = $this->input->post('nip');
			$password = $this->input->post('psw');
			$where = array(
				'nip' 		=> $nip,
				'password' 	=> $password
				);
			var_dump($where);
			$data = $this->Model_user->loginWaliKelas("wali_kelas",$where)->result();
			$cek = $this->Model_user->loginWaliKelas("wali_kelas",$where)->num_rows();
			if($cek == 1){
				$data_session = array(
					'nama'		=> $data[0]->nama_wali_kelas,
					'id_member' => $data[0]->id_wali_kelas,
					'status' 	=> "waliKelas"
				);
				$this->session->set_userdata($data_session);
				$this->load->view('WKDaftarSiswa');
			}else{
				$param = array(
					'login' => 'fail',
				);
				
				$this->load->view('loginWaliKelas', $param);
			}
		}
	}


	public function logout(){
		if ($this->session->userdata('status') == 'admin') {
			$this->session->sess_destroy();
			$param = array(
				'login' => 'nofail',
			);
			$this->load->view('loginAdmin', $param);
		} elseif ($this->session->userdata('status') == 'siswa') {
			$this->session->sess_destroy();
			$param = array(
				'login' => 'nofail',
			);
			$this->load->view('loginSiswa', $param);
		} elseif ($this->session->userdata('status') == 'waliKelas') {
			$this->session->sess_destroy();
			$param = array(
				'login' => 'nofail',
			);
			$this->load->view('loginWaliKelas', $param);
		}
	}
}