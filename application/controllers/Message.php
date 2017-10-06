<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
	public function index() {
		if ($this->session->has_userdata('logged_in')) {
			$id_user = $this->session->userdata('id_user');
			$sessiondata = array(
				'view' => 'message',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			$data['title'] = "Mensagem";
			$this->load->model('contacts_model');
			$this->load->model('groups_model');
			$data['contacts'] = $this->contacts_model->contacts();
			$data['groups'] = $this->groups_model->groups();
			$this->smarty->view('body-message.tpl',$data);
		} else {
			redirect('/login','refresh');
		}
	}
}