<?php

$keyid="21E48BC4";
$passphrase="B0nsuc3ss0";

$plain = "21980078010";

$encrypted = encrypt($keyid,$plain);

// var_dump($encrypted);

// echo "<br>";

$decrypted = decrypt($encrypted,$passphrase);
$decrypted = preg_replace("/\r|\n/", "", $decrypted);

var_dump($decrypted);
// print_r($decrypted);

echo "<br>";

function encrypt($keyid,$plaintext) {
	$result = shell_exec("(echo \"$plaintext\" | gpg --no-version --yes -q --armor -r $keyid -e)");
	return $result;
}

function decrypt($enctext,$passphrase) {
	$result = shell_exec("(echo \"$enctext\" | gpg -q --batch --no-use-agent --no-comment --passphrase $passphrase)");
	return $result;
}

?>