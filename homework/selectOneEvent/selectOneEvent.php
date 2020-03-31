<?php

	try {
	  
	  require 'PDOConnection.php';	//CONNECT to the database
	  
	  //mysql DATE stores data in a YYYY-MM-DD format
	  $todaysDate = date("Y-m-d");		//use today's date as the default input to the date( )
	  
	  //Create the SQL command string
	  $sql = "SELECT ";
	  $sql .= "event_id, ";
	  $sql .= "event_name, ";
	  $sql .= "event_description, ";
	  $sql .= "event_presenter, ";
	  $sql .= "event_date, ";
	  $sql .= "event_time "; //Last column does NOT have a comma after it.
	  $sql .= "FROM wdv341_event WHERE event_id='64' ";
		
		if($sql == "" || $sql == 0){
			echo 'not found';
		}
		
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
	  $message = "There has been a problem. Please try again later.";

	  error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
	  error_log($e->getLine());
	  error_log(var_dump(debug_backtrace()));
  
	  //Clean up any variables or connections that have been left hanging by this error.		
  
	  header('Location: files/505_error_response_page.php');	//sends control to a User friendly page					
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
    	<h1>Presenting Information</h1>
	</header>
    
    <main>
    
        <h1>Display Available Events</h1>
        
         <?php 
			while( $row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		?>		
				
		
			<table>
		
				<tr>
					<th>Event ID</th>
					<th>Event Name</th>
					<th>Event Description</th>
					<th>Event Presenter</th>
					<th>Event Date</th>
					<th>Event Time</th>
				</tr>
				
				<tr>
					<td><?php echo $row['event_id']; ?></td>
					<td><?php echo $row['event_name']; ?> </td>   
				  	<td><?php echo $row['event_description']; ?> </td>   
				  	<td><?php echo $row['event_presenter']; ?> </td>   
				  	<td><?php echo $row['event_date']; ?> </td>   
				  	<td><?php echo $row['event_time']; ?> </td>
				</tr>
	
			</table>
		
        <?php
			}
		?>	
        
	</main>
    
	<footer>
    	<p>Copyright &copy; <script> var d = new Date(); document.write (d.getFullYear());</script> All Rights Reserved</p>
    </footer>




</div>
</body>
</html>
