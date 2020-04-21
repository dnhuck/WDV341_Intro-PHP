<?php

	try {
	  
	  require 'PDOConnection.php';	//CONNECT to the database
	  
	  //mysql DATE stores data in a YYYY-MM-DD format
	  $todaysDate = date("Y-m-d");		//use today's date as the default input to the date( )
	  
	  //Create the SQL command string
	  $sql = "SELECT ";
	  $sql .= "image";
	  $sql .= "FROM wdv341_event";
		
	 // $sql .= "SELECT event_id, event_name, event_description, event_presenter, event_date, event_time FROM wdv341_events ";
	  
	 // filter: WHERE (name) = "value"	
	
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
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Presenting Information</title>

	<link rel="stylesheet" href="style.css">
	
</head>

<body>

<div id="container">

	<header>
	</header>
    
    <main>
    	
		
		<?php 
			while( $row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		?>
			<p><img src="<?php echo $row['image']; ?>"> </p>
		<?php
			}
		?>	
        
	</main>
    </div>

	<h1>Display Images</h1>

</body>
</html>
