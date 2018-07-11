<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo_m extends CI_Model {

	function insertSaldo($object)
	{
		return $this->db->insert('saldo', $object);
	}

	function updateSaldo($object)
	{
		return $this->db->update('saldo', $object);
	}

	function getSaldo()
	{
		return $this->db->get('saldo');
	}

}

/* End of file Saldo_m.php */
/* Location: ./application/models/Saldo_m.php */