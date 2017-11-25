<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

	class WaliKelasController extends CI_Controller
	{
		parent::__construct();

		$this->load->model('Nilai_Model');
	}

	public function databaseNilai(){
		$param array(
			'title' => "nilai";
			'data' => $this->Nilai_Model->getAll();

			);
		$this->load->view('headerWali',$param);
		$this->load->view('WKDaftarNilai',$param);
		$this->load->view('footer',$param);

	}	


 ?>