<?php 
class Model_siswa extends CI_Model{
	
	function tampilSiswaAktif(){
		$query = $this->db->query("select * from siswa join anggota_kelas on siswa.id_siswa = anggota_kelas.id_siswa join kelas on kelas.id_kelas = anggota_kelas.id_kelas  where siswa.status = 'aktif'");
		return $query->result();
	}

	function tampilSiswaTidakAktif(){
		$query = $this->db->query("select * from siswa where status = 'nonaktif'");
		return $query->result();
	}

	function nonaktifkanAkunSiswa($id){
		$this->db->query("update siswa set status = 'nonaktif' where id_siswa = $id");
	}

	function ambilDataSiswa($id){
		$query = $this->db->query("select * from siswa where id_siswa = '$id'");
		$result = $query->result();
		return (count($result) > 0) ? $result[0] : false ;
	}

	function ubahDataSiswa($id, $data, $tabel){
		$this->db->where(‘id_siswa’, $id);
		$this->db->update($tabel, $data);
	}

	function tambahAkunaSiswa($data, $tabel){
		$this->db->insert($table,$data);
	}
}