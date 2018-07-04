<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

	public function index()
	{
		$this->load->view('dataview/status');		
	}

}

/* End of file Status.php */
/* Location: ./application/controllers/dataview/Status.php */