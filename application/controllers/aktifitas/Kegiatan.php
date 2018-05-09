<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kegiatan_m');
		$this->load->helper('form','url');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['getData'] = $this->Kegiatan_m->getData();
		$this->load->view('aktifitas/kegiatan/kegiatan',$data);	
	}	

	public function Create()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('jumlah_donasi', 'Jumlah Donasi', 'trim|required');
		$this->form_validation->set_rules('penerima', 'Penerima', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('aktifitas/kegiatan/tambah');
		} else {
			$config['upload_path']		= './assets/uploads';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 10000000000000;
			$config['max_width']		= 10240;
			$config['max_height']		= 7680;

			$this->load->library('upload', $config); //setiap kali upload

			if (!$this->upload->do_upload('userfile')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('aktifitas/kegiatan/tambah', $error);
			}else{
				$object = array(
					'nama' => $this->input->post('nama'),
					'deskripsi' => $this->input->post('deskripsi'),
					'lokasi' => $this->input->post('lokasi'),
					'tanggal' => $this->input->post('tanggal'),
					'jumlah_donasi' => $this->input->post('jumlah_donasi'),
					'penerima' => $this->input->post('penerima'),
					'Image'=>$this->upload->data('file_name')
				);
				$this->Kegiatan_m->insertData($object);
				redirect('aktifitas/kegiatan','refresh');
			}
		} 
	}

	public function Update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('jumlah_donasi', 'Jumlah Donasi', 'trim|required');
		$this->form_validation->set_rules('penerima', 'Penerima', 'trim|required');

		$data['getData'] = $this->Kegiatan_m->getDataWhereId($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('aktifitas/kegiatan/edit', $data);
		} else {
			$config['upload_path']		= './assets/uploads';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 10000000000000;
			$config['max_width']		= 10240;
			$config['max_height']		= 7680;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('userfile')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('aktifitas/kegiatan/edit', $error);
			}else{
				$object = array(
					'nama' => $this->input->post('nama'),
					'deskripsi' => $this->input->post('deskripsi'),
					'lokasi' => $this->input->post('lokasi'),
					'tanggal' => $this->input->post('tanggal'),
					'jumlah_donasi' => $this->input->post('jumlah_donasi'),
					'penerima' => $this->input->post('penerima'),
					'Image'=>$this->upload->data('file_name')
				);
				$this->Kegiatan_m->updateData($object,$id);
				redirect('aktifitas/Kegiatan','refresh');
			}
		}
	}

	public function delete($id)
	{
		$this->Kegiatan_m->deleteData($id);
		redirect('aktifitas/kegiatan','refresh');
	}

}

?>