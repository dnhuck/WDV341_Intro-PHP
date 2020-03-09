<?php

	// assign a defalt value to input fields and error messages
	$inEventName = "";
	$inEventDescription = "";
	$inEventPresenter = "";
	$inEventDate = "";
	$inEventTime = "";

	$inEventNameErrMsg = "";
	$inEventDescriptionErrMsg = "";
	$inEventPresenterErrMsg = "";
	$inEventDateErrMsg = "";
	$inEventTimeErrMsg = "";

if(isset($_POST["submit"]))
	{
		// capturing the values of the form inputs
		$inEventName = $_POST["eventName"];
		$inEventDescription = $_POST["eventDescription"];
		$inEventPresenter = $_POST["eventPresenter"];
		$inEventDate = $_POST["eventDate"];
		$inEventTime = $_POST["eventTime"];
	
		$validForm = true; // sets a flag/switch to make sure data is valid
		// PHP validation goes here
		
		if($validForm){
			// Yes good data - Do database stuff here require('insertEvents.php');
			} else{
			
			// BAD BAD Data - Display error message, display form to user
			// 1. bad name 
				// put data on the form
				// put error messege on the form
					$inEventNameErrMsg = "Invalid Event Name Field";
					$inEventDescriptionErrMsg = "Invalid Event Description";	
					$inEventPresenterErrMsg = "Invalid Event Presenter";
					$inEventDateErrMsg = "Invalid Event Date";	
					$inEventTimeErrMsg = "Invalid Event Time";	
				}
	
	}else{
		echo "<h1>Please enter your information</h1>";
		}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Events Form</title>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
	<h1>WDV341 Intro PHP</h1>
	<h2>Unit 6: SQL Insert</h2>
	<h3>Create a form page for the events </h3>
	
	<form method="post" action="processEvents.php">
		<div>	
			<label for="eventName">Event Name:</label>
    		<input type="text" name="eventName" id="eventName" value="<?php echo $inEventName; ?>" required>
			<span><?php echo $inEventNameErrMsg; ?> </span>
		</div>
	  	<div>
			<label for="eventDecription">Event Description:</label>
    		<input type="text" name="eventDescription" id="eventDescription" value="<?php echo $inEventDescription; ?>" required>
			<span><?php echo $inEventDescriptionErrMsg; ?> </span>
		</div>
		
		<div>
			<label for="eventPresenter">Event Presenter:</label>
    		<input type="text" name="eventPresenter" id="eventPresenter" value="<?php echo $inEventPresenter; ?>" required>
			<span><?php echo $inEventPresenterErrMsg; ?> </span>
		</div>
		
		<div>
			<label for="eventDate">Event Date:</label>
    		<input type="text" name="eventDate" id="eventDate" value="<?php echo $inEventDate; ?>" required>
			<span><?php echo $inEventDateErrMsg; ?> </span>
		</div>
		
		<div>
			<label for="eventTime">Event Time:</label>
    		<input type="text" name="eventTime" id="eventTime" value="<?php echo $inEventTime; ?>" required>
			<span><?php echo $inEventTimeErrMsg; ?> </span>
		</div>
		
		<div>
			<span id="reCaptcha"></span>
			<div class="g-recaptcha" data-sitekey="6LfuPtwUAAAAAD_5-78mQ_CEkAMvyJWfb4q2Qo6H" required></div>
		</div>
		
		<div>
			<input type="submit" name="submit" id="submit" value="Submit">
			<input type="reset" name="reset" id="reset" value="Reset">
		</div>
	
	</form>
	
</body>
</html>













