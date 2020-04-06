<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class dokter_M extends CI_Model{
	
	//select * dokter, pesan, member
	public function get_dokter(){
		$query = $this->db->get('dokter');
		return $query->result();
	}
	//mencari data dokter berdasarkan email
	public function getdatadokter($email){
		$this->db->select('*');
		$this->db->from('dokter');
		$this->db->where('email_dokter',$email);
		$query = $this->db->get();
		return $query->result();
	}
}
?>