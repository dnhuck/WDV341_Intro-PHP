<script>
	<?php echo "let sentSuccess='Your Message was successfully sent! Thank you,';"; ?>
	<?php echo "let sentFailure ='Your Message was not sent successfully. Please try again.';"; ?>
</script>

<?php

	if(isset($_POST['submit'])){
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$FromEmail = $_POST['email'];
		$message = $_POST['message'];

		$mailTo = 'contact@davidhuck.net';
		$headers = "From: " . $FromEmail;
		$txt = "You have recieved an email from " . $firstName. ".\n\n".$message;


		mail($mailTo, $message, $txt, $headers);
		echo "<script>alert(sentSuccess)</script>";
		header('Location: contact.html?sendMail');


	}

?>