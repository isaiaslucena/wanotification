<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alerts extends CI_Controller {
	public function index() {
		if ($this->session->has_userdata('logged_in')) {
			$id_user = $this->session->userdata('id_user');
			$sessiondata = array(
				'view' => 'alerts',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			$data['title'] = "Alertas";
			$this->load->model('alerts_model');
			$data['alerts'] = $this->alerts_model->alerts();
			$this->smarty->view('body-alerts.tpl',$data);
		} else {
			redirect('/login','refresh');
		}
	}
}