<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alerts_model extends CI_Model {
	public function alerts() {
		$this->db->select('*');
		$this->db->order_by('name', 'ASC');
		return $this->db->get('alerts_news')->result_array();
	}

	public function alerts_numbers() {
		$this->db->select('*');
		$this->db->order_by('name', 'ASC');
		return $this->db->get('alerts_numbers')->result_array();
	}

	public function get_empresas() {
		$dbmclipp = $this->load->database('mclipp', TRUE);
		$sqlquery = 'SELECT Id, Nome FROM Empresa WHERE Status = 1 AND Owner = 2 AND Banner IS NOT NULL ORDER BY Nome ASC';
		$result = $dbmclipp->query($sqlquery)->result_array();
		$dbmclipp->close();
		return $result;
	}

	public function get_keywords() {
		$dbmclipp = $this->load->database('mclipp', TRUE);
		$sqlquery = 'SELECT Id, Nome FROM PalavraChave WHERE Ativo = 1 ORDER BY Nome ASC';
		$result = $dbmclipp->query($sqlquery)->result_array();
		$dbmclipp->close();
		return $result;
	}

	public function get_empresa_keywords($idempresa) {
		$dbmclipp = $this->load->database('mclipp', TRUE);
		$sqlquery = 'SELECT pc.Id as Id, ListaVeiculos as Idvlista, pc.Nome as Nome
								FROM Assunto ast
								JOIN PalavraChave pc ON ast.Id = pc.idAssunto
								WHERE ast.idEmpresa = '.$idempresa.' AND pc.Ativo = 1
								ORDER BY pc.Nome ASC';
		$result = $dbmclipp->query($sqlquery)->result_array();
		$dbmclipp->close();
		return $result;
	}

	public function get_listav() {
		$dbmclipp = $this->load->database('mclipp', TRUE);
		$sqlquery = 'SELECT lvi_id as Id, lvi_nome as Nome FROM VLista ORDER BY lvi_nome ASC';
		$result = $dbmclipp->query($sqlquery)->result_array();
		$dbmclipp->close();
		return $result;
	}

	public function get_tipoveiculo() {
		$dbmclipp = $this->load->database('mclipp', TRUE);
		// $sqlquery = 'SELECT Id, Nome FROM TipoVeiculo ORDER BY Nome ASC';
		$result = $this->dbmclipp->get('TipoVeiculo')->result_array();
		// $result = $dbmclipp->query($sqlquery)->result_array();
		$dbmclipp->close();
		return $result;
	}

	public function get_keyword_vlista($idvlista) {
		$dbmclipp = $this->load->database('mclipp', TRUE);
		$sqlquery = 'SELECT lvi_id as Id, lvi_nome as Nome FROM VLista WHERE lvi_id = '.$idvlista.' ORDER BY lvi_nome ASC';
		$result = $dbmclipp->query($sqlquery)->result_array();
		$dbmclipp->close();
		return $result;
	}

	public function add($data) {
		$insertdata = array(
			'name' => $data['alertname'],
			'created' => strtotime('now')
		);
		$this->db->insert('alerts_news',$insertdata);
		return $this->db->insert_id();
	}

	public function add_alerts_keywords($data) {
		$insertdata = array(
			'id_alert' => $data['id_alert'],
			'id_palavrachave' => $data['id_palavrachave'],
			'id_listaveiculo' => $data['id_listaveiculo']
		);
		$this->db->insert('alerts_keywords', $insertdata);
		return $this->db->insert_id();
	}

	public function verify($data) {
		$exists = $this->db->get_where('alerts_news',array('name' => $data['alertname']))->result_array();
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
}
?>