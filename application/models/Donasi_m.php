<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi_m extends CI_Model {

	
	public function getDataWhereId($id)
	{
		// $this->db->where('id_donatur',$id);
		// $query = $this->db->get('donasi');
		// return $query->result();
		$query = $this->db->get_where('donasi', array('id_donatur' => $id));
		return $query->row();
	}

	public function getDataMuzaki()
	{
		$query = $this->db->get('muzaki');
		return $query->result();
	}

	public function getDataBank()
	{
		$query =  $this->db->get('bank');
		return $query->result();
	}

	public function getDataKategori()
	{
		$query = $this->db->get('kategori');
		return $query->result();
	}

	public function insertData($data)
	{
		$this->db->insert('donasi',$data);
	}
	public function updateData($data,$id)
	{
		$this->db->where('id_donatur',$id);
		$this->db->update('donasi',$data);
	}
	public function deleteData($id)
	{
		if ($this->db->delete("donasi","id_donatur = ".$id)) {
			return true;
		}
	}

	public function addSaldo($id,$jumlah)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('bank');
		$result = $query->result_array();
		foreach ($result as $value) {
			$saldo = $value['saldo'];	
		}
		$saldo += $jumlah;
 		$data = array('saldo' => $saldo);
 		$this->db->where('id', $id);
 		$this->db->update('bank', $data);
	}

	public function getSaldo()
	{
		$this->db->select_sum('saldo');
		return $this->db->get('bank')->result_array();
	}

	public function getData()
	{
		// $this->db->select('donasi.id_donatur,donasi.tanggal,donasi.jumlah,muzaki.nama,kategori.nama,bank.nama');
		// $this->db->join('muzaki', 'muzaki.id = donasi.id_muzaki');
		// $this->db->join('kategori', 'kategori.id = donasi.id_kategori');
		// $this->db->join('bank', 'bank.id = donasi.id_kategori');
		// $this->db->from('donasi');
		$query = $this->db->query("
			SELECT d.id_donatur as id,d.tanggal as tanggal,d.jumlah as jumlah,m.nama as nama,k.nama as nama2,b.nama as nama3
			from donasi d
			inner join muzaki m on d.id_muzaki = m.id 
			inner join kategori k on d.id_kategori = k.id
			inner join bank b on d.id_bank = b.id
		");
		return $query->result_array();
	}

	// SELECT d.id_donatur,d.tanggal,d.jumlah,m.nama,k.nama,b.nama 
	// from donasi d
	// inner join muzaki m on d.id_muzaki = m.id 
	// inner join kategori k on d.id_kategori = k.id
	// inner join bank b on d.id_bank = b.id
}
