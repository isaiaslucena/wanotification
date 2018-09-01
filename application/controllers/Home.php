<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index() {
		if ($this->session->has_userdata('logged_in')) {
			$id_user = $this->session->userdata('id_user');
			// $is_admin = $this->db->get_where('user',array('id_user' => $id_user))->row()->admin;
			// if ($is_admin == 1) {
			// 	redirect('pages/dashboard','refresh');
			// } else {
				$sessiondata = array(
					'view' => 'home',
					'last_page' => base_url()
				);
				$this->session->set_userdata($sessiondata);
				$data['title'] = "Início";
				$this->smarty->view('foot-home.tpl',$data);
			// }
		} else {
			redirect(str_replace('http', 'https', base_url()).'login','refresh');
		}
	}
}