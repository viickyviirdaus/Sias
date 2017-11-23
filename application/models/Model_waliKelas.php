<?php 
class Model_waliKelas extends CI_Model{
	
	function tampilWaliKelasAktif(){
		$query = $this->db->query("select * from wali_kelas join kelas on wali_kelas.id_kelas = kelas.id_kelas where wali_kelas.status = 'aktif'");
		return $query->result();
	}

	function tampilWaliKelasTidakAktif(){
		$query = $this->db->query("select * from wali_kelas where status = 'nonaktif'");
		return $query->result();
	}

	function nonaktifkanAkunWaliKelas($id){
		$this->db->query("update wali_kelas set status = 'nonaktif' where id_wali_kelas = $id");
	}

	function ambilDataWaliKelas($id){
		$query = $this->db->query("select * from wali_kelas where id_wali_kelas = '$id'");
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}

	function ubahDataWaliKelas($id, $data, $tabel){
		$this->db->where(‘id_wali_kelas’, $id);
		$this->db->update($tabel, $data);
	}

	function tambahAkunaWaliKelas($data, $tabel){
		$this->db->insert($table,$data);
	}
}