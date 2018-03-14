<?php

	session_start();

	function loggedin() {

		if(isset($_SESSION['supplierEncID']) && !empty($_SESSION['supplierEncID'])) {
			return true;
		}
		else {			
			return false;
		}
	}

	if(loggedin()) {

		$supplierEncID = $_SESSION['supplierEncID'];

		$query = mysqli_query($connection, "SELECT supplierEncID, name, email FROM suppliers WHERE supplierEncID = '$supplierEncID'");

		$run_user = mysqli_fetch_array($query);
		
		$supplierEncID = $run_user['supplierEncID'];
		$name = $run_user['name'];
		$email = $run_user['email'];
	}

?>