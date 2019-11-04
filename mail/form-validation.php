<?php
	// Step 1, declaring variables and set them to empty
	
	$firstName = $lastName = $email = $subject = $message = "";	

	// Step 2, check that the request method is POST
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$firstName = test_input($_POST['firstName']);
		$lastName = test_input($_POST['lastName']);
		$email = test_input($_POST['email']);
		$subject = test_input($_POST['subject']);
		$message = test_input($_POST['message']);
	}

	// Step 3, set up the e-mail address you want the message sent to
	$to = "alex@worlderland.com"; 

	// Step 4, function  to protect from entering any code in your request through the post method
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	// Step 5 Filling up the email's header
	$header = "From:  " . $firstName . "  " . $lastName . "  " . " < " . $email . ">";

	// Step 6 Prepare email body text
	$body = "";
	$body .= "From: ";
	$body .= $email;
	$body .= "\n";
	$body .= "\n";
	$body .= "First Name: ";
	$body .= $firstName;
	$body .= "\n";
	$body .= "\n";
	$body .= "Last Name: ";
	$body .= $lastName;
	$body .= "\n";
	$body .= "\n";
	$body .= "Subject: ";
	$body .= $subject;
	$body .= "\n";
	$body .= "\n";
	$body .= "Message: ";
	$body .= "\n";
	$body .= "\n";
	$body .= $message;

	// Step 7
	mail($to, $subject, $body);
	
	// Step 8
	header("Location: ../thanks.php");
?>
