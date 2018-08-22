<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groups_model extends CI_Model {
	public function add($data) {
		$insertdata = array (
			'name' => $data['groupname']
		);
		$this->db->insert('groups',$insertdata);
		return $this->db->insert_id();
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
		return $this->db->query($sqlquery)->result_array();
	}

	public function group_alerts($idgroup) {
		$sqlquery = 'SELECT
								anews.id_alert, anews.name, agroups.id_group, agroups.id_empresa,
								agroups.priority
								FROM alerts_news anews
								JOIN alerts_groups agroups ON anews.id_alert = agroups.id_alert
								WHERE agroups.id_group = '.$idgroup;
		return $this->db->query($sqlquery)->result_array();
	}

	public function add_alerts_group($data) {
		$insertdata = array (
			'id_alert' => $data['id_alert'],
			'id_group' => $data['id_group'],
			'id_empresa' => $data['id_empresa'],
			'priority' => $data['priority'],
			'id_number' => $data['id_number']
		);
		$this->db->insert('alerts_groups',$insertdata);
		return $this->db->insert_id();
	}

	public function verify($data) {
		$exists = $this->db->get_where('groups',array('name' => $data['groupname']))->result_array();
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

	public function groups() {
		$this->db->select('id_group, name');
		$this->db->order_by('name', 'ASC');
		return $this->db->get('groups')->result_array();
	}

	public function groups_lastmsg() {
		$sqlquery = 'SELECT gpo.id_group, gpo.name AS name_group, gpq.menbers_quant,
								msg1.id_message AS id_message, FROM_UNIXTIME(msg1.timestamp) AS datetime,
								FROM_UNIXTIME(msg1.sent_timestamp) AS sent_datetime,
								msg1.msg_subject, msg1.msg_title, msg1.msg_link,
								CASE
								WHEN msg1.sent = 0 THEN "Não Enviado"
								WHEN msg1.sent = 1 THEN "Enviado"
								WHEN msg1.sent = 2 THEN "Cancelado"
								END AS status
								FROM messages_sent msg1
								JOIN (SELECT MAX(id_message) AS id_message FROM messages_sent GROUP BY id_to) msg2 ON msg1.id_message = msg2.id_message
								JOIN `groups` gpo ON msg1.id_to = gpo.id_group
								JOIN (SELECT gpm.id_group, gp.name, COUNT(gpm.id_group) AS menbers_quant FROM group_members gpm
								JOIN `groups` gp ON gpm.id_group = gp.id_group
								GROUP BY gpm.id_group) gpq ON msg1.id_to = gpq.id_group
								ORDER BY msg1.id_to ASC';
		return $this->db->query($sqlquery)->result_array();
	}

	public function jidgroup($idgroup) {
		$sqlquery = 'SELECT jid_group FROM groups	WHERE id_group = '.$idgroup;
		$result = $this->db->query($sqlquery)->result_array();
		return $result;
	}
}
?>