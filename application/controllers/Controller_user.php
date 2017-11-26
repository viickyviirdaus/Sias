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
			$where = array(
				'nis' => $nis,
				'password' => $password
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
		if ($this->session->userdata('status') == 'admin') {
			$this->session->sess_destroy();
			redirect(base_url('index.php/Welcome/loginAdmin'));
		} elseif ($this->session->userdata('status') == 'siswa') {
			$this->session->sess_destroy();
			redirect(base_url('index.php/Welcome/loginSiswa'));
		} elseif ($this->session->userdata('status') == 'waliKelas') {
			$this->session->sess_destroy();
			redirect(base_url('index.php/Welcome/loginWaliKelas'));
		}
		
	}
}
