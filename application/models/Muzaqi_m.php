<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muzaqi_m extends CI_Model {

	public function getData()
	{
		return $this->db->get('muzaki')->result_array();
	}
	public function getDataWhereId($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('muzaki')->result_array();
	}
	public function insertData($data)
	{
		$this->db->insert('muzaki',$data);
	}
	public function updateData($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('muzaki',$data);
	}
	public function deleteData($id)
	{
		if ($this->db->delete("muzaki","id = ".$id)) {
			return true;
		}
	}
}
