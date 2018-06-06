<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMuzaqi extends CI_Controller {

	public function index()
	{
		$this->load->model('Muzaqi_m');
		$data['getData'] = $this->Muzaqi_m->getData();
		$this->load->view('status/data_muzaqi',$data);		
	}

	public function tambah()
	{
		$this->load->model('Muzaqi_m');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('kota', 'Kota', 'required');
		$this->form_validation->set_rules('nohp', 'NoHp', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run() == false){
			$this->load->view('status/tambah');
		}else{
			$object = array(
				'id' => $this->input->post('id'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'kota' => $this->input->post('kota'),
				'nohp' => $this->input->post('nohp'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$this->Muzaqi_m->insertData($object);
			redirect('status/DataMuzaqi','refresh');
		}
	}

	public function update($id)
	{
		$this->load->model('Muzaqi_m');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('kota', 'Kota', 'required');
		$this->form_validation->set_rules('nohp', 'NoHp', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$data['getData'] = $this->Muzaqi_m->getDataWhereId($id)[0];
		if($this->form_validation->run() == false){
			$this->load->view('status/update',$data);
		}else{
			$object = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'kota' => $this->input->post('kota'),
				'nohp' => $this->input->post('nohp'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$this->Muzaqi_m->updateData($object,$id);
			redirect('status/DataMuzaqi','refresh');
		}
	}
	public function hapus($id)
	{
		$this->load->model('Muzaqi_m');
		$this->Muzaqi_m->deleteData($id);
		redirect('status/DataMuzaqi','refresh');
	}

}