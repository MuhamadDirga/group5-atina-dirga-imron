<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

	public function index()
	{
		$this->load->model('Bank_m'); //memanggil semua fungsi yang telah dibuat dimodel
		$data['getData'] = $this->Bank_m->getData(); //mengambil semua data table bank
		$this->load->view('admin/bank/bank.php',$data);	//menampilkan view dan mengirim data	
	}
	public function tambah()
	{
		$this->load->model('Bank_m'); 
		$this->load->helper('form'); //membantu view mengeload form lain
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('norek', 'No Rekening', 'required');
		$this->form_validation->set_rules('saldo', 'Saldo', 'required');
		if($this->form_validation->run() == false){ //jika validation ggl, tampilan tetap
			$this->load->view('admin/bank/tambah');
		}else{
			$object = array( //data input disimpan dalam bentuk array di variable objek
				'nama' => $this->input->post('nama'),
				'norek' => $this->input->post('norek'),
				'saldo' => $this->input->post('saldo')
			);
			$this->Bank_m->insertData($object); //memasukkan data
			redirect('admin/bank','refresh'); //kembali ke halaman bank
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
		$data['getData'] = $this->Bank_m->getDataWhereId($id)[0]; //untuk mengambil data berdasar id
		if($this->form_validation->run() == false){ 
			$this->load->view('admin/bank/update',$data); //data yang diambill dikirim ke view
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
