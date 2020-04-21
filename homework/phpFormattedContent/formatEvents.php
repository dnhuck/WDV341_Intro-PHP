<?php

//$currentDate = date("d/m/Y");

	//Get the Event data from the server.
	try {
	  
		require 'PDOConnection.php';	//CONNECT to the database
		
		//mysql DATE stores data in a YYYY-MM-DD format
		$todaysDate = date("Y-m-d");		//use today's date as the default input to the date( )
		

		$sql = "(SELECT event_id, event_name, event_description, event_presenter, event_date, DATE_FORMAT(event_date, '%c-%d-%Y') AS event_date, event_time FROM wdv341_event ORDER BY event_id DESC, event_name DESC, event_description DESC, event_presenter DESC, event_date DESC, event_time DESC)";

	
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
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WDV341 Intro PHP  - Display Events Example</title>
    <style>
		.eventBlock{
			width:500px;
			margin-left:auto;
			margin-right:auto;
			background-color:#CCC;	
			padding: 10px;
		}
		
		.displayEvent{
			text_align:left;
			font-size:18px;	
		}
		
		.displayDescription {
			margin-left:100px;
		}

		.future{
			font-style: italic;
		}

		.currentMonth{
			font-weight: bold;
			color: red;
		}
	</style>
</head>

<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>Example Code - Display Events as formatted output blocks</h2>   
    <h3>??? Events are available today.</h3>

<?php
	//Display each row as formatted output in the div below
?>

	<?php 
		while( $row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	?>
	<p>
        <div class="eventBlock">	
            <div>
            	<span class="displayEvent">Event ID: <?php echo $row['event_id'];?> </span>
			</div>

			<div>
				<span class="displayEvent">Event Name: <?php echo $row['event_name']; ?> </span>
            </div>

			<div>
				<span class="displayEvent">Event Presenter: <?php echo $row['event_presenter']; ?></span>
            </div>

            <div>
            	<span class="displayEvent">Event Description: <?php echo $row['event_description']; ?></span>
            </div>

            <div>
            	<span class="displayEvent">Event Time: <?php echo $row['event_time']; ?></span>
            </div>

            <div>
				<span id="displayEvent">Event Date:
					<?php 
						if($row['event_date'] > $todaysDate){
							echo "<span class='future'>" . $row['event_date'] . "</span>";
						}else{
							if(){
								echo "<span class='currentMonth'>" . $row['event_date'] . "</span>";
							}else{
								echo $row['event_date'];
							}
						}

					?>	
				</span>
            </div>
        </div>
    </p>
	
	<?php
		}
		//$eventDate = $sql['event_date'];
	?>


<?php
	//Close the database connection	
?>
</div>	
</body>
</html>