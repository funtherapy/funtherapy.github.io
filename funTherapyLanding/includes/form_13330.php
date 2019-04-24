<?php	
	if(empty($_POST['name_13330']) && strlen($_POST['name_13330']) == 0 || empty($_POST['email_13330']) && strlen($_POST['email_13330']) == 0 || empty($_POST['message_13330']) && strlen($_POST['message_13330']) == 0)
	{
		return false;
	}
	
	$name_13330 = $_POST['name_13330'];
	$email_13330 = $_POST['email_13330'];
	$message_13330 = $_POST['message_13330'];
	$optin_13330 = $_POST['optin_13330'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_13330: $name_13330 \nEmail_13330: $email_13330 \nMessage_13330: $message_13330 \nOptin_13330: $optin_13330 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_13330";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>