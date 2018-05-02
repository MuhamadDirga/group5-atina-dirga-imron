<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {

	public function index()
	{
		$this->load->model('Donasi_m');
		$data['getData'] = $this->Donasi_m->getData();
		$this->load->view('zakat/donasi/donasi.php',$data);		
	}

	public function tambah()
	{
		$this->load->model('Donasi_m');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
		if($this->form_validation->run() == false){
			$this->load->view('zakat/donasi/tambah');
		}else{
			$object = array(
				'id' => $this->input->post('id'),
				'tanggal' => $this->input->post('tanggal'),
				'jumlah' => $this->input->post('jumlah')
			);
			$this->Donasi_m->insertData($object);
			redirect('zakat/donasi','refresh');
		}
	}
	public function update($id)
	{
		$this->load->model('Donasi_m');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
		$data['getData'] = $this->Donasi_m->getDataWhereId($id)[0];
		if($this->form_validation->run() == false){
			$this->load->view('zakat/donasi/update',$data);
		}else{
			$object = array(
				
				'tanggal' => $this->input->post('tanggal'),
				'jumlah' => $this->input->post('jumlah')
			);
			$this->Donasi_m->updateData($object,$id);
			redirect('zakat/donasi','refresh');
		}
	}
	public function hapus($id)
	{
		$this->load->model('Donasi_m');
		$this->Donasi_m->deleteData($id);
		redirect('zakat/donasi','refresh');
	}
}

/* End of file PembagianZakat.php */
/* Location: ./application/controllers/zakat/PembagianZakat.php */