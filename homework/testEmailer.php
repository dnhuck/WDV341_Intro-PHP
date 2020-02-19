<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Test Emailer</title>
</head>

<body>
	<h1>WDV341 Intro PHP</h1>
	<h2>Testing the Emailer Class</h2>
	<?php
		
		require 'Emailer.php';// accesses the class file
	
		$emailTest = new Emailer(); // instatiating new Emailer object
	
		$emailTest->set_message("This is a test");
		echo $emailTest->get_message(); // returns email address
		echo "<br>";
		
		$emailTest->set_senderEmail("dnhuck@dmacc.edu");
		echo $emailTest->get_senderEmail(); 
		echo "<br>";
	
		$emailTest->set_recipientEmail("davidhuck08@gmail.com");
		echo $emailTest->get_recipientEmail();
		echo "<br>";
	
		$emailTest->set_subject("TESTING");
		echo $emailTest->get_subject();  
		echo "<br>";
		
		echo $emailTest->sendEmail(); // send email to SMTP server
	?>
</body>
</html>

<!--
				$_POST

	Name          |  Value
	--------------------------
	InputName     | First Name
	InutLastName  | Last Name
	submit		  | submit

	
-->









