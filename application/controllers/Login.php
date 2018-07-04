<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('login');		
	}
	
	public function proses_login()
	{
		$this->load->model("Login_m");
		$data = $this->input->post();
		$autentifikasi = $this->Login_m->autentifikasi(
			$this->input->post('username'),
			$this->input->post('password'),
			$this->input->post('user_login')
		);
		if($autentifikasi){
			$autentifikasi['user_login'] = $this->input->post('user_login');
			$this->session->set_userdata('login',$autentifikasi);
			redirect('home','refresh');
		}else{
			redirect('Login','refresh');
		}
	}
	
	public function logout()
	{
		$sess_array = array(
			'username' => ''
		);
		$this->session->unset_userdata('login', $sess_array);
		redirect('Login','refresh');
	}
	
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */