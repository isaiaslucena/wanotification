<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GPG_model extends CI_Model {
	function encrypt($plaintext,$keyid) {
		$result = shell_exec("(echo \"$plaintext\" | gpg --no-version --yes -q --armor -r $keyid -e)");
		return $result;
	}

	function decrypt($enctext,$passphrase="B0nsuc3ss0") {
		$result = shell_exec("(echo \"$enctext\" | gpg -q --batch --no-use-agent --no-comment --passphrase $passphrase)");
		return $result;
	}
}

?>