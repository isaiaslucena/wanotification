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

	public function add() {
		if ($this->session->has_userdata('logged_in')) {
			$id_user = $this->session->userdata('id_user');
			$sessiondata = array(
				'view' => 'alerts_news_add',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			$data['title'] = "Alertas - Adicionar";
			if ($this->input->method(TRUE) == 'POST') {
				$postdata['name'] = trim($this->input->post("name"));
				$this->load->model('alerts_model');
				$data['responsedata']['exist'] = $this->groups_model->verify($postdata);
				if ($data['responsedata']['exist']) {
					$data['responsedata']['status'] = "error";
					$data['responsedata']['message'] = "Alerta já cadastrado!";
				} else {
					$data['responsedata']['id_alert'] = $this->alerts_model->add($postdata);
					$data['responsedata']['status'] = "success";
					$data['responsedata']['message'] = "Alerta cadastrado com sucesso!";
				}
				$data['postdata'] = $postdata;
				header('Content-Type: application/json');
				print json_encode($data);
			} else {
				$this->load->model('contacts_model');
				$this->load->model('alerts_model');
				$data['contacts'] = $this->contacts_model->contacts();
				$data['alerts'] = $this->alerts_model->alerts();
				$data['numbers'] = $this->alerts_model->alerts_numbers();
				// $data['clients'] = $this->alerts_model->get_empresas();
				// $data['veiculos'] = $this->alerts_model->get_listav();
				$this->smarty->view('body-alerts-add.tpl',$data);
			}
		} else {
			redirect('/login','refresh');
		}
	}
}