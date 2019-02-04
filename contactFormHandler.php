<?php
	$errors = '';
	$myemail = 'br3psi@siisu.org';//<-----Put Your email address here.
	if(empty($_POST['name'])  || 
	   empty($_POST['email']) || 
	   empty($_POST['mobile']) ||
	   empty($_POST['notes']))
	{
	    $errors .= "\n Error: all fields are required";
	}

	$name = $_POST['name']; 
	$email_address = $_POST['email']; 
	$mobile = $_POST['mobile'];
	$notes = $_POST['notes']; 

	if (!preg_match(
	"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
	$email_address))
	{
	    $errors .= "\n Error: Invalid email address";
	}

	if( empty($errors))
	{
	$to = $myemail;
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n ".
	"Email: $email_address \nMobile: $mobile \nNotes \n$notes";
	$headers = "From: $myemail\n";
	$headers .= "Reply-To: $email_address";
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: ../siisu.php');
	}
?>