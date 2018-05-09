<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

	public function autentifikasi($username,$password,$user_login)
	{
		$this->db->select('*');
		$this->db->from($user_login);
		$this->db->where(array(
			"username" => $username,
			"password" => $password
		));
		$query = $this->db->get();
		if($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}
}
