<?php 

Class Nilai_Model extends CI_Model
{

	public function getAll(){
		$query = $this->db->get('nilai');
		return $query->result();
	}

}

 ?>