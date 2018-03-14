<?php


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		//Check to make sure the form submission is coming from our script
		//The full URL of our registration page
		// $current = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

		//The full URL of the page the form was submitted from
		// $referrer = $_SERVER['HTTP_REFERER'];

		/*
		 * Check to see if the $_POST array has date (i.e. our form was submitted) and if so,
		 * process the form data.
		 */
		if ( !empty ( $_POST ) ) {

			/* 
			 * Here we actually run the check to see if the form was submitted from our
			 * site. Since our registration from submits to itself, this is pretty easy. If
			 * the form submission didn't come from the register.php page on our server,
			 * we don't allow the data through.
			 */
			if ( $referrer == $current ) {
			
				//Require our database class
				require_once $_SERVER['DOCUMENT_ROOT']. '/jubbila/includes/dbconnection.php';
    			require_once $_SERVER['DOCUMENT_ROOT']. '/jubbila/includes/config.php';

				$name = mysqli_real_escape_string($connection, $_POST['name']);
				$email = mysqli_real_escape_string($connection, $_POST['email']);
				$mobile = mysqli_real_escape_string($connection, $_POST['mobile']);
				$password = mysqli_real_escape_string($connection, $_POST['password']);
				$cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);
				$regDate = mysqli_real_escape_string($connection, $_POST['date']);

				$sql = "SELECT email FROM users WHERE email = $email";
				$query = mysqli_query($connection, $sql);
				$numResults = mysqli_num_rows($query);

				 
				// Validation of email address
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "Invalid Email";
					exit();
				}
				elseif($numResults > 0) {
					echo "Email Already Exist";
					exit();
				}
				else {
					$usersalt = random_bytes(10);
					$usersalt = bin2hex($usersalt);

					$nonce = md5($usersalt . $email . $regDate . NONCE_SALT);

					//Hashing the password
					$password = hash_password($password, $nonce);

					$sql = "INSERT INTO users (name, email, mobile, password, regDate, usersalt, userType, userActive) VALUES('$name', '$email', '$mobile', '$password', '$regDate', '$usersalt', 'USER', 1);";
					if(!mysqli_query($connection, $sql)) {
						echo "Insert Error: " . mysqli_error($connection);
						exit();
					}
					else {
						session_start();
						$_SESSION['email'] = $email;
        				$_SESSION['date'] = $regDate;
        				$_SESSION['name'] = $name;

        				// This is how we'll know the user is logged in
        				$_SESSION['logged_in'] = true;

						header ('location: '.$rootpath.'demo.php');						
					}
				}
	    	}
	    	else {
				die('Your form submission did not come from the correct page. Please check with the site administrator.');
			}
		}
	}










?>
































