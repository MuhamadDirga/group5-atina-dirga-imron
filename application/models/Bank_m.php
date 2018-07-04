<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_m extends CI_Model {

	public function getData() //mengambil data dari db
	{
		return $this->db->get('bank')->result_array();
	}
	public function getDataWhereId($id) //mengambil data berdasar id
	{
		$this->db->where('id',$id);
		return $this->db->get('bank')->result_array();
	}
	public function insertData($data) 
	{
		$this->db->insert('bank',$data);
	}
	public function updateData($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('bank',$data);
	}
	public function deleteData($id)
	{
		if ($this->db->delete("bank","id = ".$id)) {
			return true;
		}
	}
}
