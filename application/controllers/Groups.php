<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groups extends CI_Controller {
	public function index() {
		if ($this->session->has_userdata('logged_in')) {
			$id_user = $this->session->userdata('id_user');
			$sessiondata = array(
				'view' => 'groups',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			$data['title'] = "Grupos";
			$this->load->model('groups_model');
			$data['groups'] = $this->groups_model->groups_lastmsg();
			$this->smarty->view('body-groups.tpl',$data);
		} else {
			redirect('/login','refresh');
		}
	}

	public function group_members($idgroup) {
		if ($this->session->has_userdata('logged_in')) {
			$id_user = $this->session->userdata('id_user');
			$sessiondata = array(
				'view' => 'group_members',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			$this->load->model('groups_model');
			$result = $this->groups_model->group_members($idgroup);
			header('Content-Type: application/json');
			print json_encode($result);
		} else {
			redirect('/login','refresh');
		}
	}

	public function group_alerts($idgroup) {
		if ($this->session->has_userdata('logged_in')) {
			$this->load->model('groups_model');

			$result = $this->groups_model->group_alerts($idgroup);
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
				'view' => 'groups_add',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			$data['title'] = "Grupos - Adicionar";
			if ($this->input->method(TRUE) == 'POST') {
				$postdata['name'] = $this->input->post("name");
				$postdata['id_contacts'] = $this->input->post("id_contacts");
				$this->load->model('groups_model');
				$data['responsedata']['exist'] = $this->groups_model->verify($postdata);
				if ($data['responsedata']['exist']) {
					$data['responsedata']['status'] = "error";
					$data['responsedata']['message'] = "Grupo já cadastrado!";
				} else {
					$this->groups_model->add($postdata);
					$datamember['id_group'] = $this->db->insert_id();
					foreach ($postdata['id_contacts'] as $idcontact) {
						$datamember['id_contact'] = $idcontact;
						$this->groups_model->add_member($datamember);
					}
					$data['responsedata']['status'] = "success";
					$data['responsedata']['message'] = "Grupo cadastrado com sucesso!";
				}
				$data['postdata'] = $postdata;
				print json_encode($data);
			} else {
				$this->load->model('contacts_model');
				$this->load->model('alerts_model');
				$data['contacts'] = $this->contacts_model->contacts();
				$data['alerts'] = $this->alerts_model->alerts();
				$data['numbers'] = $this->alerts_model->alerts_numbers();
				$data['clients'] = $this->alerts_model->get_empresas();
				$data['veiculos'] = $this->alerts_model->get_listav();
				$this->smarty->view('body-groups-add.tpl',$data);
			}
		} else {
			redirect('/login','refresh');
		}
	}

	public function add_member() {
		if ($this->session->has_userdata('logged_in')) {
			$id_user = $this->session->userdata('id_user');
			$sessiondata = array(
				'view' => 'groups_add_member',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			$this->load->model('groups_model');
			if ($this->input->method(TRUE) == 'POST') {
				$datamember['id_group'] = $this->input->post('id_group');
				$postdata['id_contacts'] = $this->input->post("id_contacts");
				foreach ($postdata['id_contacts'] as $idcontact) {
					$datamember['id_contact'] = $idcontact;
					$this->groups_model->add_member($datamember);
				}
			} else {
				$result = "GET method not authorized!";
				header('Content-Type: application/json');
				print json_encode($result);
			}
		}
	}

	public function del_member() {
		if ($this->session->has_userdata('logged_in')) {
			$id_user = $this->session->userdata('id_user');
			$sessiondata = array(
				'view' => 'groups_del_member',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			$this->load->model('groups_model');
			if ($this->input->method(TRUE) == 'POST') {
				$datamember['id_group'] = $this->input->post('id_group');
				$postdata['id_contacts'] = $this->input->post("id_contacts");
				foreach ($postdata['id_contacts'] as $idcontact) {
					$datamember['id_contact'] = $idcontact;
					$this->groups_model->del_member($datamember);
				}
			} else {
				$result = "GET method not authorized!";
				print json_encode($result);
			}
		}
	}

	public function edit() {
		if ($this->session->has_userdata('logged_in')) {
			$id_user = $this->session->userdata('id_user');
			$sessiondata = array(
				'view' => 'groups_edit',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			$data['title'] = "Grupos - Editar";
			$this->load->model('groups_model');
			if ($this->input->method(TRUE) == 'POST') {
				$editdata['id_group'] = $this->input->post("id_group");
				$editdata['name'] = $this->input->post("name");
				$editdata['id_contacts'] = $this->input->post("id_contacs");
				$result = $this->groups_model->edit($editdata);
				header('Content-Type: application/json');
				print json_encode($result);
			} else {
				$result = "GET method not authorized!";
				header('Content-Type: application/json');
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
				'view' => 'groups_del',
				'last_page' => base_url()
			);
			$this->session->set_userdata($sessiondata);
			$this->load->model('groups_model');
			if ($this->input->method(TRUE) == 'POST') {
				$id_group = $this->input->post("id_group");
				$result = $this->groups_model->del($id_group);
				header('Content-Type: application/json');
				print json_encode($result);
			} else {
				$result = "GET method not authorized!";
				header('Content-Type: application/json');
				print json_encode($result);
			}
		} else {
			redirect('/login','refresh');
		}
	}
}