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
			echo "<h1>Sent Successfully! Thank you" . " " . $name . ", We will contact you shortly! </h1>";
		}
		else{
			echo "Something went wrong!";
		}

	}
?>