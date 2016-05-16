<?php


session_start;
    // variables start
	$name = "";
	$email = "";
	$message = "";
	
	$name =  trim($_POST['contactNameField']);
	$email =  trim($_POST['contactEmailField']);
	$message =  trim($_POST['contactMessageTextarea']);
	// variables end
		$var=$_SESSION['user'];
	$var2=$_SESSION['fulname'];
	// email address starts
	$emailAddress = $var;
	// email address ends
	
	$subject = "Message From: $name";	
	$message = "<strong>From:</strong> $name <br/><br/> <strong>Message:</strong> $message";
	
	$headers .= 'From: '. $var . '<' . $emailAddress . '>' . "\r\n";
	$headers .= 'Reply-To: ' . $emailAddress . "\r\n";
	
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	//send email function starts
	mail($email, $subject, $message, $headers);
	//send email function ends
?>