<?php
	include "../keys/cred.php";
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	// require("PHPMailer/src/PHPMailer.php");
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$notes = $_POST['notes'];
		if(isset($_POST['page'])){
			$page = $_POST['page'];
		}

	// 	$to='br3psi@siisu.org';
	// 	$subject = 'Contact Us Form Submission';
		$message = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Phone: " . $phone . "\n" . "Message: " . $notes;
		$mail = new PHPMailer();

		//Enable SMTP debugging. 
		// $mail->SMTPDebug = 3;                               
		//Set PHPMailer to use SMTP.
		$mail->isSMTP();            
		//Set SMTP host name                          
		$mail->Host = "smtp.gmail.com";
		//Set this to true if SMTP host requires authentication to send email
		$mail->SMTPAuth = true;                          
		//Provide username and password     
		$mail->Username = $hostEmail;                 
		$mail->Password = $mailPass;                           
		//If SMTP requires TLS encryption then set it
		$mail->SMTPSecure = "tls";                           
		//Set TCP port to connect to 
		$mail->Port = 587;                                   

		$mail->From = $hostEmail;
		$mail->FromName = "Pedro Salinas Ibarra";

		$mail->addAddress($hostEmail);

		$mail->isHTML(true);

		$mail->Subject = "Contact Us Form Submission";
		$mail->Body = $message;
		// $mail->AltBody = "This is the plain text version of the email content";
		if(!$mail->send()) 
		{
			if(isset($_POST['page'])){
				if($page == "about"){
				header("Location: aboutus.html");
			}
			}
		    // echo "Mailer Error: " . $mail->ErrorInfo;
		    header("Location: ../index.php");

		} 
		else 
		{
			if(isset($_POST['page'])){
				if($page == "about"){
				header("Location: aboutus.html");
			}
		    // echo "Message has been sent successfully";
		    header("Location: ../index.php");
		}
		

	// 	$headers = "From: " . $email;

	// 	if(mail($to, $subject, $message, $headers)){
	// 		header("Location: ../index.php");
	// 	}
	// 	else{
	// 		echo "Something went wrong!";
	// 	}

	}





// // $mail->IsSMTP();                                      // set mailer to use SMTP
// $mail->Host = "siisu.org";  // specify main and backup server
// $mail->SMTPAuth = true;     // turn on SMTP authentication
// $mail->Username = $hostEmail;  // SMTP username
// $mail->Password = $mailPass; // SMTP password
// $mail->SMTPSecure = 'tls';
// $mail->Port     = 587;
// $mail->From = $hostEmail;
// $mail->FromName = "Pedro Salinas Ibarra";
// $mail->AddAddress($recEmail);
// // $mail->AddReplyTo("info@example.com", "Information");
// $mail->WordWrap = 50;                                 // set word wrap to 50 characters
// // $mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
// // $mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
// $mail->IsHTML(true);                                  // set email format to HTML
// $mail->Subject = "";
// $mail->Body    = "This is the HTML researched";
// // $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
// if(!$mail->Send())
// {
//    echo "Message could not be sent.";
//    echo "Mailer Error: " . $mail->ErrorInfo;
//    exit;
// }
// echo "Message has been sent";
?>