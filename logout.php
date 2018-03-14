<?php
/* Log out process, unsets and destroys session variables */
// session_start();
// session_unset();
// if(session_destroy()) {
// 	header('location: index.php');
// }





	//Expire our auth coookie to log the user out
	$userout = setcookie('dearme_user', '', time() - 3600);
	$idout = setcookie('dearme_authID', '', time() - 3600);

	if ( $idout == true && $userout == true ) {
		// header('location: index.php');

		echo "you are loggedout";
	} else {
		echo "you are not loggedout";
	}

?>