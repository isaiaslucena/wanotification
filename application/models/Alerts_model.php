<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alerts_model extends CI_Model {
	public function alerts() {
		$this->db->select('*');
		$this->db->order_by('name', 'ASC');
		return $this->db->get('alerts_news')->result_array();
	}

	public function add($data) {
		$insertdata = array (
			'name' => $data['name']
		);
		$this->db->insert('groups',$insertdata);
	}

	public function add_member($data) {
		$insertdata = array (
			'id_group' => $data['id_group'],
			'id_contact' => $data['id_contact']
		);
		$this->db->insert('group_members',$insertdata);
	}

	public function del_member($data) {
		$insertdata = array (
			'id_group' => $data['id_group'],
			'id_contact' => $data['id_contact']
		);
		$this->db->delete('group_members',$insertdata);
	}

	public function group_members($data) {
		$sqlquery = 'SELECT ct.id_contact, ct.name, ct.surname FROM group_members gm
					JOIN contacts ct ON gm.id_contact=ct.id_contact
					JOIN groups gp ON gm.id_group=gp.id_group
					WHERE gm.id_group = '.$data;
		$result = $this->db->query($sqlquery)->result_array();
		return $result;
	}

	public function verify($data) {
		$exists = $this->db->get_where('groups',array('name' => $data['name']))->result_array();
		if (empty($exists)) {
			$result = false;
		} else {
			$result = true;
		}
		return $result;
	}

	public function edit($data) {
		$this->db->set('name',$data['name']);
		$this->db->where('id_group',$data['id_group']);
		$this->db->update('groups');
		return true;
	}

	public function del($id_group) {
		$this->db->delete('groups', array('id_group' => $id_group));
		return true;
	}

	public function jidgroup($idgroup) {
		$sqlquery = 'SELECT jid_group FROM groups	WHERE id_group = '.$idgroup;
		$result = $this->db->query($sqlquery)->result_array();
		return $result;
	}
}
?>