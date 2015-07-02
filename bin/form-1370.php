<?php	
	if(empty($_POST['']) || empty($_POST['']) || empty($_POST['r-30-00']))
	{
		return false;
	}
	
	$ = $_POST[''];
	$ = $_POST[''];
	$r-30-00 = $_POST['r-30-00'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from My Site.";
	$email_body = "You have received a new message. \n\n".
				  ": $ \n: $ \nR-30-00: $r-30-00 \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>