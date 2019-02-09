<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$notes = $_POST['notes'];

		$to='brayannereyes12@gmail.com';
		$subject = 'Contact Us Form Submission';
		$message = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Mobile: " . $mobile . "\n" . "Notes: " . $notes;
		$headers = "From: " . $email;

		if(mail($to, $subject, $message, $headers)){
			header("Location: ../index.php");
		}
		else{
			echo "Something went wrong!";
		}

	}



// include "../keys/cred.php";
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';
// // require("PHPMailer/src/PHPMailer.php");

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// $mail = new PHPMailer();

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