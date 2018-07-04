<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Donasi_m');
		$this->load->helper('form','url');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['getData'] = $this->Donasi_m->getData();

		//passing data ke view edit
		$this->load->view('aktifitas/donasi/donasi',$data);	
	}

	public function Create()
	{
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');

		if($this->form_validation->run() == false){
			$data['getDataMuzaki'] = $this->Donasi_m->getDataMuzaki();
			$data['getDataKategori'] = $this->Donasi_m->getDataKategori();
			$data['getDataBank'] = $this->Donasi_m->getDataBank();
			
			$this->load->view('aktifitas/Donasi/tambah',$data);
		}else{
			$object = array(
				'tanggal' => $this->input->post('tanggal'),
				'jumlah' => $this->input->post('jumlah'),
				'id_muzaki' => $this->input->post('muzaki'),
				'id_kategori' => $this->input->post('kategori'),
				'id_bank' => $this->input->post('bank')
			);
			$this->Donasi_m->insertData($object);
			$this->Donasi_m->addSaldo($this->input->post('bank'),$this->input->post('jumlah'));
			redirect('aktifitas/Donasi','refresh');
		} 
	}

	public function create_user()
	{
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');

		if($this->form_validation->run() == false){

			$data['getDataKategori'] = $this->Donasi_m->getDataKategori();
			$data['getDataBank'] = $this->Donasi_m->getDataBank();
			
			$this->load->view('tambah_donasi',$data);
		}else{
			$object = array(
				'tanggal' => $this->input->post('tanggal'),
				'jumlah' => $this->input->post('jumlah'),
				'id_muzaki' => $this->input->post('muzaki'),
				'id_kategori' => $this->input->post('kategori'),
				'id_bank' => $this->input->post('bank')
			);
			$this->Donasi_m->insertData($object);
			$this->Donasi_m->addSaldo($this->input->post('bank'),$this->input->post('jumlah'));
			redirect('Home','refresh');
		} 
	}

	public function Update($id)
	{
		// $data['donasi'] = $this->Donasi_m->getDataWhereId($id);
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
		if($this->form_validation->run() == false){
			$data['getData'] = $this->Donasi_m->getDataWhereId($id);
			$data['getDataMuzaki'] = $this->Donasi_m->getDataMuzaki();
			$data['getDataKategori'] = $this->Donasi_m->getDataKategori();
			$data['getDataBank'] = $this->Donasi_m->getDataBank();
			$this->load->view('aktifitas/donasi/edit',$data);
		}else{
			$object = array(
				'tanggal' => $this->input->post('tanggal'),
				'jumlah' => $this->input->post('jumlah'),
				'id_muzaki' => $this->input->post('muzaki'),
				'id_kategori' => $this->input->post('kategori'),
				'id_bank' => $this->input->post('bank')
			);

			$this->Donasi_m->updateData($object, $id);

			redirect('aktifitas/Donasi','refresh');
		} 
	}

	public function delete($id)
	{
		$this->Donasi_m->deleteData($id);
		redirect('aktifitas/donasi','refresh');
	}
	
}

/* End of file PembagianZakat.php */
/* Location: ./application/controllers/zakat/PembagianZakat.php */