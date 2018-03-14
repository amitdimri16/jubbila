<?php
	/* Displays user information and some useful messages */
	// session_start();
	require 'includes/dbconnection.php';

	// // Check if user is logged in using the session variable
	// if($_SESSION['logged_in'] != 1) {
	//   	$_SESSION['message'] = "You must log in before viewing your profile page!";
	//   	echo $_SESSION['message'];
	// }
	// else {
	//     // Makes it easier to read
	//     $name = $_SESSION['name'];
	//     $email = $_SESSION['email'];
	//     $date = $_SESSION['date'];
	//     echo $_SESSION['logged_in']."<br>";
	//     echo $name."<br>";
	//     echo $email."<br>";
	//     echo $date."<br>";
	// }




	//Grab our authorization cookie array
		$cookie_user = $_COOKIE['dearme_user'];
		$cookie_authID = $_COOKIE['dearme_authID'];
		
		//Set our user and authID variables
		// $user = $cookie['user'];
		// $authID = $cookie['authID'];

		echo $cookie_user."<br>".$cookie_authID;

		echo 'Hello '.($_COOKIE['first_namee']!='' ? $_COOKIE['first_namee'] : 'Guest<br>'); // Hello David!
		
		//Query the database for the selected user
		$sql = "SELECT * FROM users WHERE name = '" . $user . "'";
		$query = mysqli_query($connection, $sql);

		$results = mysqli_fetch_assoc($query);
		
		$storedPass = $results['password'];
		$usersalt = $results['usersalt'];
		$name = $results['name'];
		$stoRegDate = $results['regDate'];

		echo $name."<br>";

					echo mysqli_error($connection);

		//Kill the script if the submitted username doesn't exit
		if (!$query) {
			die('Sorry, that username does not exist!');
		}

		//Fetch our results into an associative array
		// $results = mysql_fetch_assoc( $results );








?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<br><a href="logout.php">Logout</a>
</body>
</html>