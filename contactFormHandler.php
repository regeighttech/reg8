<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$notes = $_POST['notes'];

		$to='br3psi@siisu.org';
		$subject = 'Contact Us Form Submission';
		$message = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Phone: " . $phone . "\n" . "Message: " . $notes;
		$headers = "From: " . $email;

		if(mail($to, $subject, $message, $headers)){
			header("Location: ../index.php");
		}
		else{
			echo "Something went wrong!";
		}

	}
?>