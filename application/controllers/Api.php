<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	public function index() {
		if ($this->input->method(TRUE) == 'POST') {
			$postdata = ($_POST = json_decode(file_get_contents("php://input"),true));
			$msg = $postdata['msgTexto'];

			$connection = ssh2_connect('172.17.0.14', 22);
			ssh2_auth_password($connection, 'root', 'B0nsuc3ss0');
			if (isset($postdata['idGrupo'])) {
				$iddbgroup = $postdata['idGrupo'];
				$this->load->model('groups_model');
				$jidgroup = $this->groups_model->jidgroup($iddbgroup);
				$stream = ssh2_exec($connection, 'python3 /root/example/runsend.py "'.$jidgroup[0]['jid_group'].'" "'.$msg.'"');
				stream_set_blocking($stream, true);
				$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
				var_dump(stream_get_contents($stream_out));
			} else {
				$idcontact = $postdata['idContato'];
				$this->load->model('contacts_model');
				$this->load->model('GPG_model');
				$encphone = $this->contacts_model->contact($idcontact);
				$decphone = $this->GPG_model->decrypt($encphone[0]['phone']);
				$jidcontact = $decphone."@s.whatsapp.net";
				$stream = ssh2_exec($connection, 'python3 /root/example/runsend.py "'.$jidcontact.'" "'.$msg.'"');
				stream_set_blocking($stream, true);
				$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
				var_dump(stream_get_contents($stream_out));
			}
			header('Content-Type: application/json');
			print json_encode("Mensagem enviada!",JSON_PRETTY_PRINT);
		} else {
			header('Content-Type: application/json');
			print json_encode("Method not permitted!");
		}
	}
}
?>