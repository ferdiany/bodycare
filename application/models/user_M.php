<?php 
defined('BASEPATH') OR exit('no direct script allowed');

class user_M extends CI_Model{
	public function get_user(){
		$query = $this->db->get('member');
		return $query->result();
	}
	public function getdatapasien($email){
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where('email_member',$email);
		$query = $this->db->get();
		return $query->result();
	}
	public function insertpesan($table,$pesan){
		$this->db->insert($table,$pesan);
	}
	public function getpesanmember($email){
		$this->db->select('*');
		$this->db->from('konsultasi');
		$this->db->where('email_member',$email);
		$query = $this->db->get();
		return $query->result();
	}
	public function getpesandokter($email){
		$this->db->select('*');
		$this->db->from('konsultasi');
		$this->db->where('email_dokter',$email);
		$query = $this->db->get();
		return $query->result();
	}
}
?>