<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

	public function index()
	{
		$this->load->model('Bank_m');
		$data['getData'] = $this->Bank_m->getData();
		$this->load->view('admin/bank/bank.php',$data);		
	}
	public function tambah()
	{
		$this->load->model('Bank_m');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('norek', 'No Rekening', 'required');
		$this->form_validation->set_rules('saldo', 'Saldo', 'required');
		if($this->form_validation->run() == false){
			$this->load->view('admin/bank/tambah');
		}else{
			$object = array(
				'nama' => $this->input->post('nama'),
				'norek' => $this->input->post('norek'),
				'saldo' => $this->input->post('saldo')
			);
			$this->Bank_m->insertData($object);
			redirect('admin/bank','refresh');
		}
	}
	public function update($id)
	{
		$this->load->model('Bank_m');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('norek', 'No Rekening', 'required');
		$this->form_validation->set_rules('saldo', 'Saldo', 'required');
		$data['getData'] = $this->Bank_m->getDataWhereId($id)[0];
		if($this->form_validation->run() == false){
			$this->load->view('admin/bank/update',$data);
		}else{
			$object = array(
				'nama' => $this->input->post('nama'),
				'norek' => $this->input->post('norek'),
				'saldo' => $this->input->post('saldo')
			);
			$this->Bank_m->updateData($object,$id);
			redirect('admin/bank','refresh');
		}
	}
	public function hapus($id)
	{
		$this->load->model('Bank_m');
		$this->Bank_m->deleteData($id);
		redirect('admin/bank','refresh');
	}
}
