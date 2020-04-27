<?php

if(!$_SESSION['validUser'] == true){
	header('Location: login.php');
}

//$currentDate = date("d/m/Y");

	//Get the Event data from the server.
	try {
	  
		require 'PDOConnection.php';	//CONNECT to the database
		
		//mysql DATE stores data in a YYYY-MM-DD format
		$todaysDate = date("Y-m-d");		//use today's date as the default input to the date( )
		

		$sql = "(SELECT event_id, event_name, event_description, event_presenter, event_date, event_time, event_image FROM wdv341_event)";

	
		// (SELECT event_id, event_name, event_description, event_presenter, event_date, event_time FROM wdv341_event ORDER BY event_id DESC, event_name DESC, event_description DESC, event_presenter DESC, event_date DESC, event_time DESC) UNION 
		// CASE WHEN event_date > $todaysDate then 'yellow' else 'noColor' End as event_name
	   // filter: WHERE (name) = "value"
	   // DATE_FORMAT(event_date, '%D %M %Y')
	   // SELECT * FROM `wdv341_event` WHERE 1	
	  
		//PREPARE the SQL statement
		$stmt = $conn->prepare($sql);
		
		//EXECUTE the prepared statement
		$stmt->execute();		
		
		//Prepared statement result will deliver an associative array
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
	}
	
	catch(PDOException $e)
	{
		$message = "There has been a problem . Please try again later.";
		echo $message;
  
		error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
		error_log($e->getLine());
		error_log(var_dump(debug_backtrace()));
	
		//Clean up any variables or connections that have been left hanging by this error.		
	
		//header('Location: files/505_error_response_page.php');	//sends control to a User friendly page					
	}
	
?>
