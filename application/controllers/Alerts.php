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

	public function get_alerts() {
		if ($this->session->has_userdata('logged_in')) {
			$this->load->model('alerts_model');
			$result = $this->alerts_model->alerts();
			header('Content-Type: application/json');
			print json_encode($result);
		} else {
			redirect('/login','refresh');
		}
	}

	public function get_empresa_keywords($idempresa) {
		if ($this->session->has_userdata('logged_in')) {
			$this->load->model('alerts_model');
			$result = $this->alerts_model->get_empresa_keywords($idempresa);
			header('Content-Type: application/json');
			print json_encode($result);
		} else {
			redirect('/login','refresh');
		}
	}

	public function get_keyword_vlista($idvlista) {
		if ($this->session->has_userdata('logged_in')) {
			$this->load->model('alerts_model');
			$result = $this->alerts_model->get_keyword_vlista($idvlista);
			header('Content-Type: application/json');
			print json_encode($result);
		} else {
			redirect('/login','refresh');
		}
	}
}