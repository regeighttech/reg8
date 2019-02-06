<?php
	// if(isset($_POST['submit'])){
	// 	$name = $_POST['name'];
	// 	$email = $_POST['email'];
	// 	$mobile = $_POST['mobile'];
	// 	$notes = $_POST['notes'];

	// 	$to='ibarrajkey@gmail.com';
	// 	$subject = 'Contact Us Form Submission';
	// 	$message = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Mobile: " . $mobile . "\n" . "Notes: " . $notes;
	// 	$headers = "From: " . $email;

	// 	if(mail($to, $subject, $message, $headers)){
	// 		header("Location: ../index.php");
	// 	}
	// 	else{
	// 		echo "Something went wrong!";
	// 	}

	// }
 require_once "Mail.php";
 
 // $from = "Sandra Sender <sender@example.com>";
 // $to = "Ramona Recipient <recipient@example.com>";
 // $subject = "Hi!";
 // $body = "Hi,\n\nHow are you?";
 
 // $host = "mail.gdom.net";
 // $username = "lfc hosted email";
 // $password = "email password";
 
 // $headers = array ('From' => $from,
 //   'To' => $to,
 //   'Subject' => $subject);
 // $smtp = Mail::factory('smtp',
 //   array ('host' => $host,
 //     'auth' => true,
 //     'username' => $username,
 //     'password' => $password));
 
 // $mail = $smtp->send($to, $headers, $body);
 
 // if (PEAR::isError($mail)) {
 //   echo("<p>" . $mail->getMessage() . "</p>");
 //  } else {
 //   echo("<p>Message successfully sent!</p>");
 //  }
?>