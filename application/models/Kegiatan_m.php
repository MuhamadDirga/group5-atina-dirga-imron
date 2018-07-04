<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_m extends CI_Model {

	public function getData()
	{
		return $this->db->get('kegiatan')->result_array();
	}

	public function getDataLimit($limit)
	{
		return $this->db->get('kegiatan',$limit)->result_array();
	}

	public function getDataWhereId($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('kegiatan');
		return $query->result();
	}
	public function insertData($data)
	{
		$this->db->insert('kegiatan',$data);
	}
	public function updateData($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('kegiatan',$data);
	}
	public function deleteData($id)
	{
		if ($this->db->delete("kegiatan","id = ".$id)) {
			return true;
		}
	}
}
