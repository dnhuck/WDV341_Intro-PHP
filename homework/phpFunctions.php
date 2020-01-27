<?php
	function todaysDate(){
		//echo "Date Works";
		$localDate = date("m/d/Y");
		$internationalDate = date("d/m/Y");
		echo "Local Date: " . $localDate . "<br>" . "International Date: " .  $internationalDate;
	}

	function str(){
		
	}
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php echo "<h1>WDV 341: Intro PHP</h1>"; ?>
	<?php echo "<h2>Assignment: PHP Function</h2>"; ?>
	<?php echo todaysDate(); ?>
</body>
</html>


<!-- Create a function that will accept a date input and format it into mm/dd/yyyy format.
Create a function that will accept a date input and format it into dd/mm/yyyy format to use when working with international dates.
Create a function that will accept a string input.  It will do the following things to the string:
Display the number of characters in the string
Trim any leading or trailing whitespace
Display the string as all lowercase characters
Will display whether or not the string contains "DMACC" either upper or lowercase
Create a function that will accept a number and display it as a formatted number.   Use 1234567890 for your testing.
Create a function that will accept a number and display it as US currency.  Use 123456 for your testing. -->