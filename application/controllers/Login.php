<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index() {
		$data['title'] = "Login";

		if ($this->input->method(TRUE) == 'POST') {
			$datalogin = array(
					'username' => $this->input->post("username"),
					'password' => md5($this->input->post("password"))
				);
			$this->load->model('login_model');
			$login = $this->login_model->validate_login($datalogin);
			if ($login) {
				$datalogin['id_user'] = $this->db->get_where('users', array('username' => $datalogin['username'] , 'password' => $datalogin['password']))->row()->id_user;
				$sessiondata = array(
					'id_user' => $datalogin['id_user'],
					'username' => $datalogin['username'],
					'logged_in' => TRUE
				);
				$this->session->set_userdata($sessiondata);
				$datalogin['status'] = 'success';
				print json_encode($datalogin);
			}
			else {
				$datalogin['status'] = 'error';
				print json_encode($datalogin);
			}
		} else {
			$this->smarty->view('foot-login.tpl',$data);
		}
	}

	public function signout() {
		$this->load->model('login_model');
		$sessiondata = array(
			'id_user',
			'username',
			'logged_in',
			'last_page'
		);
		$this->session->unset_userdata($sessiondata);
		$this->session->sess_destroy();
		redirect('/login','refresh');
	}
}