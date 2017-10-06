<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function validate_login($datalogin) {
		$validate = $this->db->get_where('users', array('username' => $datalogin['username'], 'password' => $datalogin['password']),1);
		if ($validate->num_rows() == 1) {
			return true;
		}
		else {
			return false;
		}
	}
}
?>