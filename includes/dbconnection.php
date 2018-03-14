<?php

	$host = "localhost";
	$user = "root";
	$pass = "Br0kenG!@sses";
	$dbname = "event";

	$rootpath = "/jubbila/";

	// $connection = mysqli_connect($host, $user, $pass, $dbname);

	// if (!$connection) {
		// die('Database Connection Error: ' . mysql_error());
	// }

	function hash_password($password, $nonce) {
		$secureHash = hash_hmac('sha512', $password . $nonce, SITE_KEY);

		return $secureHash;
	}

?>
