<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {
	public function index() {
		if ($this->session->has_userdata('logged_in')) {
			$id_user = $this->session->userdata('id_user');
			$sessiondata = array(
				'view' => 'contacts',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			$data['title'] = "Grupos";
			$this->load->model('contacts_model');
			$data['contacts'] = $this->contacts_model->contacts();
			$this->smarty->view('body-contacts.tpl',$data);
		} else {
			redirect('/login','refresh');
		}
	}

	public function add() {
		if ($this->session->has_userdata('logged_in')) {
			$id_user = $this->session->userdata('id_user');
			$sessiondata = array(
				'view' => 'contacts_add',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			$data['title'] = "Grupos - Adicionar";
			if ($this->input->method(TRUE) == 'POST') {
				$postdata['name'] = $this->input->post("name");
				$postdata['surname'] = $this->input->post("surname");
				$postdata['phone'] = $this->input->post("phone");
				$this->load->model('contacts_model');
				$data['responsedata']['exist'] = $this->contacts_model->verify($postdata);
				if ($data['responsedata']['exist']) {
					$data['responsedata']['status'] = "error";
					$data['responsedata']['message'] = "Telefone já cadastrado!";
				} else {
					$this->contacts_model->add($postdata);
					$data['responsedata']['status'] = "success";
					$data['responsedata']['message'] = "Contato cadastrado com sucesso!";
				}
				print json_encode($data);
			} else {
				$this->smarty->view('body-contatcs-add.tpl',$data);
			}
		} else {
			redirect('/login','refresh');
		}
	}

	public function edit() {
		if ($this->session->has_userdata('logged_in')) {
			$id_user = $this->session->userdata('id_user');
			$sessiondata = array(
				'view' => 'contacts_edit',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			$data['title'] = "Grupos - Editar";
			$this->load->model('contacts_model');
			if ($this->input->method(TRUE) == 'POST') {
				$editdata['id_contact'] = $this->input->post("id_contact");
				$editdata['name'] = $this->input->post("name");
				$editdata['surname'] = $this->input->post("surname");
				$result = $this->contacts_model->edit($editdata);
				print json_encode($result); 
			} else {
				$result = "GET method not authorized!";
				print json_encode($result);
			}
		} else {
			redirect('/login','refresh');
		}
	}

	public function del() {
		if ($this->session->has_userdata('logged_in')) {
			$id_user = $this->session->userdata('id_user');
			$sessiondata = array(
				'view' => 'contacts_del',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			$data['title'] = "Grupos - Remover";
			$this->load->model('contacts_model');
			if ($this->input->method(TRUE) == 'POST') {
				$id_contact = $this->input->post("id_contact");
				$result = $this->contacts_model->del($id_contact);
				print json_encode($result); 
			} else {
				$result = "GET method not authorized!";
				print json_encode($result);
			}
		} else {
			redirect('/login','refresh');
		}
	}

	public function listex() {
		if ($this->session->has_userdata('logged_in')) {
			$id_user = $this->session->userdata('id_user');
			$sessiondata = array(
				'view' => 'contacts_show',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			if ($this->input->method(TRUE) == 'GET') {
				$idsex = $this->input->get('idsex');
				$this->load->model('contacts_model');
				$result = $this->contacts_model->contactsex($idsex);
				header('Content-Type: application/json');
				print json_encode($result); 
			} else {
				$result = "POST method not authorized!";
				print json_encode($result);
			}
		} else {
			redirect('/login','refresh');
		}
	}
}