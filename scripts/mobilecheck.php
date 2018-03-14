<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		include_once $_SERVER['DOCUMENT_ROOT']. '/jubbila/includes/dbconnection.php';

		$mobile = $_POST['mobile'];

		$mobile = str_replace("-", "", $mobile);
		$mobile = str_replace("(", "", $mobile);
		$mobile = str_replace(")", "", $mobile);
		$mobile = str_replace(" ", "", $mobile);
		$mobile = str_replace("+91", "", $mobile);
		$mobile = str_replace("+", "", $mobile);

		echo $mobile."<br>";

		$sql = "SELECT mobile FROM users WHERE mobile = '$mobile';";
		$query = mysqli_query($connection, $sql);
		$numResultsMobile = mysqli_num_rows($query);
		
		if($numResultsMobile == 0) {
			echo "true";
		} else {
			echo "false";
		}

	}

?>