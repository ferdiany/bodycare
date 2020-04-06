<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Bodycare extends CI_Controller{
	public function __construct(){
		// Load M_Web as parents in here.
		parent::__construct();
		$this->load->model('bodycare_M');
  	}
	public function index(){
		$this->load->view('V_loginheader');
		$this->load->view('V_userhome');
		$this->load->view('V_footer');
	}
	public function viewloginuser(){
		$this->load->view('V_loginheader');
		$this->load->view('V_login_user');
		$this->load->view('V_footer');
	}
	public function viewlogindokter(){
		$this->load->view('V_loginheader');
		$this->load->view('V_login_dokter');
		$this->load->view('V_footer');
	}
	public function viewloginpenjual(){
		$this->load->view('V_loginheader');
		$this->load->view('V_login_penjual');
		$this->load->view('V_footer');
	}
	public function loginuser(){
//		$this->load->view('V_login');
		$this->load->view('V_loginheader');
		$this->load->view('V_login_user');
		$this->load->view('V_footer');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$where_member = array(
			'email_member' => $email,
			'password' => $password
		);
		
		$cek_member = $this->bodycare_M->cek_login('member',$where_member)->num_rows();
		
		if($cek_member > 0){
			//cek nama member sesuai email untuk ditampilkan di session
			$nama = $this->bodycare_M->cek_nama_member($email); 
			$this->session->set_userdata('email',$nama);
			redirect('user');
		}else{
			$this->session->set_flashdata('logingagal', 'Username atau password salah');
			redirect('bodycare/viewloginuser');
		}
	}		
	public function logindokter(){
		$this->load->view('V_loginheader');
		$this->load->view('V_login_dokter');
		$this->load->view('V_footer');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$where_dokter = array(
			'email_dokter' => $email,
			'password' => $password
		);
		
		$cek_dokter = $this->bodycare_M->cek_login('dokter',$where_dokter)->num_rows();
		
		if($cek_dokter >0){
			//cek nama dokter sesuai email untuk ditampilkan di session
			$nama = $this->bodycare_M->cek_nama_dokter($email); 
			$this->session->set_userdata('email',$nama);
			redirect('dokter');
		}else{
			$this->session->set_flashdata('logingagal', 'Username atau password salah');
			redirect('bodycare/viewlogindokter');
		}
	}
	public function loginpenjual(){
		$this->load->view('V_loginheader');
		$this->load->view('V_login_penjual');
		$this->load->view('V_footer');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$where_penjual = array(
			'email_penjual' => $email,
			'password' => $password
		);
		
		$cek_penjual = $this->bodycare_M->cek_login('penjual',$where_penjual)->num_rows();
		
		if($cek_penjual >0){
			//cek nama dokter sesuai email untuk ditampilkan di session
			$nama = $this->bodycare_M->cek_nama_penjual($email); 
			$this->session->set_userdata('email',$nama);
			redirect('penjual');
		}else{
			$this->session->set_flashdata('logingagal', 'Username atau password salah');
			redirect('bodycare/viewloginpenjual');
		}
	}
	public function logout(){
			$this->session->sess_destroy();
			redirect('bodycare');
	}
}
?>