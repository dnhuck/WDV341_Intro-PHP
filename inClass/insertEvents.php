<?php
	// This PHP file will connect to wdv341 database
	// It will pull the form data from the $_POST variable
	// It will format an INSERT SQL statement
	// It will create a prepared statement
	// It qill bind the parameters to the prepared statement
	// It will execute the prepared statement to insert into the database
	// It will display a success/failure message to the user

	require 'PDOConnection.php'; // access and run this external file

try{
	$eventName = "WDV341 Intro PHP"; 
	$eventDescription = "We are inserting into a database.";
	$eventDate = '2020-02-24';
	$eventPresenter = "Jeff G";
	$eventTime = "6:00";
	

	// PDO Prepare statements

	// prepare the SQL statements

	// 1. Create the SQL statements with name placeholders
	$sql = "INSERT INTO wdv341_event (event_name, event_description, event_date, event_presenter, event_time)
	VALUES (:eventName, :eventDescription, :eventDate, :eventPresenter, :eventTime)";

	// 2. Create the prepared statement object
	$stmt = $conn->prepare($sql); 	// creates the prepared statement object

	// Bind parameters to the prepared statement object. One for each parameter
	$stmt->bindParam(':eventName', $eventName);
	$stmt->bindParam(':eventDescription', $eventDescription);
	$stmt->bindParam(':eventDate', $eventDate);
	$stmt->bindParam(':eventPresenter', $eventPresenter);
	$stmt->bindParam(':eventTime', $eventTime);

	
	//Execute the prepared statement 
	$stmt->execute();
	}

	catch(PDOException $e){
		echo "WARNING WARNING WARNING I HAVE STOLEN YOUR CREDIT CARD!";
	}

$conn = null; // close your connection object
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h2>Thank you for your order!</h2>
</body>
</html>