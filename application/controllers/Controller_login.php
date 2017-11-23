<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_login extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		$this->load->model('Model_user');
		$this->load->library('session');
	}

	public function loginAdmin(){
		$nip = $this->input->post('usr');
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
				'status' 	=> "login"
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
	}

	public function loginSiswa(){
		$nisn = $this->input->post('usr');
		$password = $this->input->post('psw');
		$where = array(
			'nisn' => $nisn,
			'password' => $password,
			);
		$data = $this->Model_siswa->cek_login("siswa",$where)->result();
		$cek = $this->Model_siswa->cek_login("siswa",$where)->num_rows();
		if($cek == 1){
			$data_session = array(
				'nama'		=> $data[0]->nama_siswa,
				'id_member' => $data[0]->id_member,
				//'foto_member' => $data[0]->foto,
				'status' 	=> "login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('index.php/iklan/terbaru'));
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

	public function loginWaliKelas(){
		$nip = $this->input->post('usr');
		$password = $this->input->post('psw');
		$where = array(
			'nip' => $nip,
			'password' => $password
			);
		$data = $this->Model_waliKelas->cek_login("member",$where)->result();
		$cek = $this->modelUser->cek_login("member",$where)->num_rows();
		if($cek == 1){
			$data_session = array(
				'nama'		=> $data[0]->nama,
				'id_member' => $data[0]->id_member,
				'status' 	=> "login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('index.php/iklan/terbaru'));
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
