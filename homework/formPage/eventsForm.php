<!-- It will display a form that can be used to input the information for an event.
Use your database field names as your name attributes in the HTML of the form. 
The action attribute of your form will call the insertEvents.php page that we started in class.
Include at least one form protection technique such as honeypot, Captcha, reCaptcha, etc.
Use PHP, PDO and SQL to process the form data into your database. 

It will connect to your wdv341 database using your database connection page. 
Include this into your eventsForm.php page.
It will access the wdv341_event table.  
Use a PDO Prepared Statement to code and process a SQL INSERT command to insert the form data into your table. -->	
<?php

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Events Form</title>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>/*
		let validName = document.querySelector("#eventName").value;
		let validDescription = document.querySelector("#eventDescription").value;
		let validPresenter = document.querySelector("#eventPresenter").value;
		let validDate = document.querySelector("#eventDate").value;
		let validTime = document.querySelector("#eventTime").value;
		
		document.querySelector("#submit").click(function(){
			
			if(validName == "" || validName == "null" || validName == "undefined"){
					alert("Enter Valid Name");
				}
		
				if(validDescription == "" || validDescription == "null" || validDescription == "undefined"){
					alert("Enter Valid Description");
				}

				if(validPresenter == "" || validPresenter == "null" || validPresenter == "undefined"){
					alert("Enter Valid Presenter");
				}

				if(validDate == "" || validDate == "null" || validDate == "undefined"){
					alert("Enter Valid Date");
				}

				if(validTime == "" || validTime == "null" || validTime == "undefined"){
					alert("Enter Valid Time");
				}
		});		
		*/
</script>
</head>

<body>
	<h1>WDV341 Intro PHP</h1>
	<h2>Unit 6: SQL Insert</h2>
	<h3>Create a form page for the events </h3>
	
	<form method="post" action="insertEvents.php">
		<div>	
			<label for="eventName">Event Name:</label>
    		<input type="text" name="eventName" id="eventName" required>
		</div>
	  	<div>
			<label for="eventDecription">Event Description:</label>
    		<input type="text" name="eventDescription" id="eventDescription" required>
		</div>
		
		<div>
			<label for="eventPresenter">Event Presenter:</label>
    		<input type="text" name="eventPresenter" id="eventPresenter" required>
		</div>
		
		<div>
			<label for="eventDate">Event Date:</label>
    		<input type="text" name="eventDate" id="eventDate" required>
		</div>
		
		<div>
			<label for="eventTime">Event Time:</label>
    		<input type="text" name="eventTime" id="eventTime" required>
		</div>
		
		<div>
			<span id="reCaptcha"></span>
			<div class="g-recaptcha" data-sitekey="6LdFKNoUAAAAAIxUBDNFroSvknDonDNvd_oKDw0n" required></div>
		</div>
		
		<div>
			<input type="submit" name="submit" id="submit" value="Submit">
			<input type="reset" name="reset" id="reset" value="Reset">
		</div>
	
	</form>
	
</body>
</html>













