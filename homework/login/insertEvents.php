<?php

	require 'PDOConnection.php'; // access and run this external file

try{
	$eventName = $_POST["eventName"]; 
	$eventDescription = $_POST["eventDescription"];
	$eventDate = $_POST["eventDate"];
	$eventPresenter = $_POST["eventPresenter"];
	$eventTime = $_POST["eventTime"];
	$image = $_FILES['image']['name'];

	// PDO Prepare statements

	// prepare the SQL statements

	// 1. Create the SQL statements with name placeholders
	$sql = "INSERT INTO wdv341_event(event_name, event_description, event_date, event_presenter, event_time, event_image)
	VALUES (:eventName, :eventDescription, :eventDate, :eventPresenter, :eventTime, :eventImage)";

	// 2. Create the prepared statement object
	$stmt = $conn->prepare($sql); 	// creates the prepared statement object

	// Bind parameters to the prepared statement object. One for each parameter
	$stmt->bindParam(':eventName', $eventName);
	$stmt->bindParam(':eventDescription', $eventDescription);
	$stmt->bindParam(':eventDate', $eventDate);
	$stmt->bindParam(':eventPresenter', $eventPresenter);
	$stmt->bindParam(':eventTime', $eventTime);
	$stmt->bindParam(':eventImage', $image);

	
	//Execute the prepared statement 
	$stmt->execute();
	}

	catch(PDOException $e){
		echo "Failure. Please try again";
	}

$conn = null; // close your connection object
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insert Events</title>
</head>

<body>
	<h2>Thank you for submitting!</h2>
</body>
</html>