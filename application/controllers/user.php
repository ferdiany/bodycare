<?php 
defined('BASEPATH') OR exit('no direct script access allowed');

class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('user_M');
		$this->load->model('dokter_M');
		
	}
	public function index(){
//		$this->load->model('user_M');
		$data['data_user'] = $this->user_M->get_user();
		$this->load->view('V_userheader');
		$this->load->view('V_userhome',$data);
		$this->load->view('V_footer');
//		$data_session['user'] = $this->db->get_where('member',['email_member' => $this->session->userdata('email')])->row_array();
	}
	public function daftar_dokter(){
		$data["data_dokter"] = $this->dokter_M->get_dokter();
		$this->load->view('V_userheader');
		$this->load->view('V_daftardokter',$data);
		$this->load->view('V_footer');
	}
	public function chat_dokter($email){
		$nama_dokter['data_dokter'] = $this->dokter_M->getdatadokter($email);
		$this->load->view('V_userheader');
		$this->load->view('V_chatdokter',$nama_dokter);
		$this->load->view('V_footer');
	}
	public function tambahpesan(){
		
	}
}
?>