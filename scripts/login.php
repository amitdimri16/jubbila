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
			// if ( $referrer == $current ) {
			
				//Require our database class
				require_once $_SERVER['DOCUMENT_ROOT']. '/jubbila/includes/dbconnection.php';
    			require_once $_SERVER['DOCUMENT_ROOT']. '/jubbila/includes/config.php';
				
				$email = mysqli_real_escape_string($connection, $_POST['email']);
				$password = mysqli_real_escape_string($connection, $_POST['password']);



				$sql = "SELECT * FROM users WHERE email = '$email'";
				$query = mysqli_query($connection, $sql);
				$numResults = mysqli_num_rows($query);

				// Validation of email address
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "Invalid Email";
					exit();
				}
				elseif($numResults == 0) {
					echo $numResults."<br>";
					echo "You are not registered with us.<br>";
					exit();
				} 
				else {
					$results = mysqli_fetch_assoc($query);
					
					$storedPass = $results['password'];
					$usersalt = $results['usersalt'];
					$name = $results['name'];
					$stoRegDate = $results['regDate'];
					
					$nonce = md5($usersalt . $email . $stoRegDate . NONCE_SALT);

					$currnetPass = hash_password($password, $nonce);

					if($currnetPass == $storedPass) {

						$_SESSION['email'] = $email;
        				$_SESSION['date'] = $stoRegDate;
        				$_SESSION['name'] = $name;

        				// This is how we'll know the user is logged in
        				$_SESSION['logged_in'] = true;

						header ('location: '.$rootpath.'demo.php?user=login');

						$authnonce = md5('cookie-' . $name . $stoRegDate . AUTH_SALT);
						$authID = hash_password($currnetPass, $authnonce);
						
						//Set our authorization cookie
						setcookie('dearme_user', $name, time() + (86400 * 7), '', '', '', true);
						setcookie('dearme_authID', $authID, time() + (86400 * 7), '', '', '', true);

					} else {
						return 'invalid';
						exit();
					}					
				}
	    	// }
	    	// else {
				// die('Your form submission did not come from the correct page. Please check with the site administrator.');
			// }    	
		}
	}

?>