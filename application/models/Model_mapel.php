<?php 
class Model_mapel extends CI_Model{
	
	function tampilMapel(){
		$query = $this->db->query("select * from mata_pelajaran");
		return $query->result();
	}

	function ambilDataMapel($id){
		$query = $this->db->query("select * from mata_pelajaran where id_mata_pelajaran = '$id'");
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}

	function ambilDataMapelByNama($mapel){
		$query = $this->db->query("select * from mata_pelajaran where nama_mata_pelajaran like '%$mapel%'");
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}

	function ubahDataMapel($id, $data, $tabel){
		$this->db->where('id_mata_pelajaran', $id);
		$this->db->update($tabel, $data);
	}

	function tambahMapel($data, $tabel){
		$this->db->insert($tabel,$data);
	}
}