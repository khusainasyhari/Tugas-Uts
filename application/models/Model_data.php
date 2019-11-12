<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_data extends CI_Model{

	public function load_mahasiswa(){
		$sql = $this->db->query("SELECT * FROM tb_mahasiswa WHERE flag = 1");
		return $sql->result_array();
	}

	public function simpan($post){
	
		$nim = $this->db->escape($post['nim']);
		$nama = $this->db->escape($post['nama']);
		$alamat = $this->db->escape($post['alamat']);
		$jenis_kel = $this->db->escape($post['jenis_kel']);
		$telp = $this->db->escape($post['telp']);
		$email = $this->db->escape($post['email']);

		$sql = $this->db->query("INSERT INTO tb_mahasiswa VALUES ( $nim, $nama, $alamat, $jenis_kel,$telp, $email, 1)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($nim){
		$sql = $this->db->query("SELECT * FROM tb_mahasiswa WHERE nim = ".intval($nim));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $nim){
		$nama = $this->db->escape($post['nama']);
		$alamat = $this->db->escape($post['alamat']);
		$jenis_kel = $this->db->escape($post['jenis_kel']);
		$telp = $this->db->escape($post['telp']);
		$email = $this->db->escape($post['email']);

		$sql = $this->db->query("UPDATE tb_mahasiswa SET nim = $nim, name = $nama, alamat = $alamat,jenis_kel =$jenis_kel ,email = $email WHERE nim = ".intval($nim));

		return true;
	}

	public function hapus($nim){
		$sql = $this->db->query("UPDATE tb_mahasiswa SET flag = 0 WHERE nim = ".intval($nim));
	}	

}