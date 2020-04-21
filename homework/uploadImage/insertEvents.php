<?php
	require 'PDOConnection.php'; // access and run this external file

try{
	$image = $_FILES['image']['name'];
	// PDO Prepare statements

	// prepare the SQL statements

	// 1. Create the SQL statements with name placeholders
	$sql = "INSERT INTO wdv341_event(image)
	VALUES (:image)";

	// 2. Create the prepared statement object
	$stmt = $conn->prepare($sql); 	// creates the prepared statement object

	$stmt->bindParam(':image', $image);

	
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