<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi_m extends CI_Model {

	public function getData()
	{
		return $this->db->get('donasi')->result_array();
	}
	public function getDataWhereId($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('donasi')->result_array();
	}
	public function insertData($data)
	{
		$this->db->insert('donasi',$data);
	}
	public function updateData($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('donasi',$data);
	}
	public function deleteData($id)
	{
		if ($this->db->delete("donasi","id = ".$id)) {
			return true;
		}
	}
}
