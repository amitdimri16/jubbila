<?php
	require_once $_SERVER['DOCUMENT_ROOT'] .'/jubbila/assets/js/PHPMailerAutoload.php';
	// Check for empty fields
	if(empty($_POST['name'])      ||
	   empty($_POST['email'])     ||
	   // empty($_POST['phone'])     ||
	   empty($_POST['message'])   ||
	   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
		   echo "No arguments Provided!";
		   return false;
	}

	$name = strip_tags(htmlspecialchars($_POST['name']));
	$email = strip_tags(htmlspecialchars($_POST['email']));
	// $phone = strip_tags(htmlspecialchars($_POST['phone']));
	$message = strip_tags(htmlspecialchars($_POST['message']));

	$bodyHTML = "
		Name: $name<br><br>
		Email: $email<br><br>
		Message:<br>
		$message.
	";
	$bodyPlain =  "
		Name: $name<br><br>
		Email: $email<br><br>
		Message:<br>
		$message.
	";

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               	// Enable verbose debug output

	$mail->isSMTP();                                      	// Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               	// Enable SMTP authentication
	$mail->Username = 'amitdimri.developer@gmail.com';      // SMTP username
	$mail->Password = 'I_Want*Success';                     // SMTP password
	$mail->SMTPSecure = 'tls';                            	// Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    	// TCP port to connect to
	                                  	

	$mail->setFrom('amitdimri.developer@gmail.com', 'Jubbila Feedback');
	$mail->addAddress('amitdimri.developer@gmail.com', 'Amit Dimri'); 					// Add a recipient
	$mail->isHTML(true);                                 	// Set email format to HTML

	$mail->Subject = 'JUBBILA FEEDBACK';
	$mail->Body    = $bodyHTML;
	$mail->AltBody = $bodyPlain;

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
	else {
		$mail->send();
	}

?>