<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_m extends CI_Model {

	public function getData()
	{
		return $this->db->get('kategori')->result_array();
	}
	public function getDataWhereId($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('kategori');
		return $query->result();
	}
	public function insertData($data)
	{
		$this->db->insert('kategori',$data);
	}
	public function updateData($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('kategori',$data);
	}
	public function deleteData($id)
	{
		if ($this->db->delete("kategori","id = ".$id)) {
			return true;
		}
	}
}
