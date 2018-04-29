<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_m extends CI_Model {

	public function getData()
	{
		return $this->db->get('bank')->result_array();
	}
	public function insertData($data)
	{
		$this->db->insert('bank',$data);
	}
	public function deleteData($id)
	{
		if ($this->db->delete("bank", "id = ".$id)) {
			return true;
		}
	}
}
