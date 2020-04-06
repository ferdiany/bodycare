<?php 
defined('BASEPATH') OR exit('no direct script access allowed');

class Dokter extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('dokter_M');
		$this->load->model('user_M');
  	}
	public function index(){
		$data["data_dokter"] = $this->dokter_M->get_dokter();
		$this->load->view('V_dokterheader');
		$this->load->view('V_userhome',$data);
		$this->load->view('V_footer');
	}
	public function data_pasien(){
		$data['data_user'] = $this->user_M->get_user();
		$this->load->view('V_dokterheader');
		$this->load->view('V_daftaruser',$data);
		$this->load->view('V_footer');
	}
	public function chat_pasien($email){
		$nama_pasien['data_pasien'] = $this->user_M->getdatapasien($email);
		$this->load->view('V_dokterheader');
		$this->load->view('V_chatpasien',$nama_pasien);
		$this->load->view('V_footer');
	}
}
?>