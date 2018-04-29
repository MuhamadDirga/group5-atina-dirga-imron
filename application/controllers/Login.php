<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
			$this->session->set_userdata('login',$data);
			redirect('Home','refresh');
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