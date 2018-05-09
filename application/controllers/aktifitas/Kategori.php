<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_m');
		$this->load->helper('form','url');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['getData'] = $this->Kategori_m->getData();
		$this->load->view('aktifitas/kategori/kategori',$data);	
	}	
	
	public function Create()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		
		if($this->form_validation->run() == false){
			$this->load->view('aktifitas/kategori/tambah');
		}else{
			$object = array(
				'nama' => $this->input->post('nama'),
			);
			$this->Kategori_m->insertData($object);
			redirect('aktifitas/kategori','refresh');
		} 
	}

	public function Update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$data['getData'] = $this->Kategori_m->getDataWhereId($id);
		if($this->form_validation->run() == false){
			$this->load->view('aktifitas/kategori/edit',$data);
		}else{
			$object = array(
				'nama' => $this->input->post('nama'),
			);
			$this->Kategori_m->updateData($object,$id);
			redirect('aktifitas/kategori','refresh');
		} 
	}

	public function delete($id)
	{
		$this->Kategori_m->deleteData($id);
		redirect('aktifitas/kategori','refresh');
	}

}

/* End of file PembagianZakat.php */
/* Location: ./application/controllers/zakat/PembagianZakat.php */