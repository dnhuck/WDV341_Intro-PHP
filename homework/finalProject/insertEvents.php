<?php



if(!$_SESSION['validUser'] == true){
	header('Location: login.php');
}

	require 'PDOConnection.php'; // access and run this external file

try{
	$eventName = $_POST["picName"]; 
	$eventDescription = $_POST["picDescription"];
	$eventDate = $_POST["picLocation"];
	$eventPresenter = $_POST["dateTaken"];
	$image = $_FILES['image']['name'];

	// PDO Prepare statements

	// prepare the SQL statements

	// 1. Create the SQL statements with name placeholders
	$sql = "INSERT INTO upload_pic(pic_name, pic_description, pic_location, date_taken, pic_image)
	VALUES (:eventName, :eventDescription, :eventDate, :eventPresenter, :eventImage)";

	// 2. Create the prepared statement object
	$stmt = $conn->prepare($sql); 	// creates the prepared statement object

	// Bind parameters to the prepared statement object. One for each parameter
	$stmt->bindParam(':eventName', $eventName);
	$stmt->bindParam(':eventDescription', $eventDescription);
	$stmt->bindParam(':eventDate', $eventDate);
	$stmt->bindParam(':eventPresenter', $eventPresenter);
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
</body>
</html>