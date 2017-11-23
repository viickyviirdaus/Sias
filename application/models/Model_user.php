<?php 
class Model_user extends CI_Model{
	
	function loginAdmin($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function loginSiswa($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function loginWaliKelas($table,$where){		
		return $this->db->get_where($table,$where);
	}
}