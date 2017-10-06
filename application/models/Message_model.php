<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts_model extends CI_Model {
	public function add($data) {
		$insertdata = array (
			'name' => $data['name'],
			'surname' => $data['surname'],
			'phone' => $data['phone']
		);
		$this->db->insert('contacts',$insertdata);
	}

	public function verify($data) {
		$this->load->model('GPG_model');
		$decphone = $this->GPG_model->decrypt($data['phone']);
		$dbcontacts = $this->db->get('contacts')->result_array();
		$decdbcontacts = array();
		foreach ($dbcontacts as $dbcontact) {
			$decdb['id_contact'] = $dbcontact['id_contact'];
			$decdb['name'] = $dbcontact['name'];
			$decdb['surname'] = $dbcontact['surname'];
			$decdb['phone'] = $this->GPG_model->decrypt($dbcontact['phone']);
			array_push($decdbcontacts, $decdb);
		}
		$search = array_search($decphone, array_column($decdbcontacts, 'phone'));
		if (!is_numeric($search)) {
			$resultst = false;
		} else {
			$resultst = true;
		}
		// $result['dbdata'] = $decdbcontacts;
		// $result['decphone'] = $decphone;
		// $result['search'] = $search;
		// $result['exists'] = $resultst;
		return $resultst;
	}

	public function edit($data) {
		$this->db->set('name',$data['name']);
		$this->db->set('surname',$data['surname']);
		$this->db->where('id_contact',$data['id_contact']);
		$this->db->update('contacts');
		return true;
	}

	public function del($id_contact) {
		$this->db->delete('contacts', array('id_contact' => $id_contact));
		return true;
	}

	public function contacts() {
		$this->db->select('id_contact, name, surname');
		$this->db->order_by('name', 'ASC');
		$this->db->order_by('surname', 'ASC');
		$query = $this->db->get('contacts')->result_array();
		return $query;
	}

	public function contactsex($data) {
		$ids=null;
		$count=0;
		$countid=(count($data)-1);
		foreach ($data as $id) {
			if ($count == $countid) {
				$ids .= $id;
			} else {
				$ids .= $id.',';
			}
			$count++;
		}
		$sqlquery = 'SELECT id_contact,name,surname FROM contacts WHERE id_contact NOT IN ('.$ids.') ORDER BY name,surname ASC';
		$result = $this->db->query($sqlquery)->result_array();
		return $result;
	}
}
?>