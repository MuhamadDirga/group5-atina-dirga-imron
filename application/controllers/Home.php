<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Donasi_m');
		$this->load->model('Home_m');
		$this->load->model('Kegiatan_m');
		$this->load->model('Saldo_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['page_title'] = 'List Kegiatan';

        // Dapatkan data dari model Blog dengan pagination
        // Jumlah artikel per halaman
		$limit_per_page = 5;

        // URI segment untuk mendeteksi "halaman ke berapa" dari URL
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

        // Dapatkan jumlah data
		$total_records = $this->Home_m->get_total();

		if ($total_records > 0) {
    // Dapatkan data pada halaman yg dituju
			$data["all_artikel"] = $this->Home_m->get_all_artikel($limit_per_page, $start_index);

    // Konfigurasi pagination
			$config['base_url'] = base_url() . 'index.php/Home/index';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 3;

			$this->pagination->initialize($config);

    // Buat link pagination
			$data["links"] = $this->pagination->create_links();

			$data['saldo'] = $this->Donasi_m->getSaldo();
			$data['getData'] = $this->Kegiatan_m->getDataLimit(4);
			$saldo_terakhir = $this->Saldo_m->getSaldo();
			$saldo = 0;
			foreach ($saldo_terakhir->result() as $value) {
				$saldo = $value->saldo;
			}
			$data['saldo'] = $saldo;
			$this->load->view('Home',$data);
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */