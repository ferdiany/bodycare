<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class bodycare_M extends CI_Model{
	
	#mendapatkan data member berdasarkan email
	public function get_member($email){
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where('email_member',$email);
		$query = $this->db->get();
		return $query->result();
	}
	public function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
	public function cek_nama_member($email){
		$this->db->select('nama_member');
		$this->db->from('member');
		$this->db->where('email_member',$email);
		$query = $this->db->get();
		return $query->row()->nama_member;
	}
	public function cek_nama_dokter($email){
		$this->db->select('nama_dokter');
		$this->db->from('dokter');
		$this->db->where('email_dokter',$email);
		$query = $this->db->get();
		return $query->row()->nama_dokter;
	}
}

?>