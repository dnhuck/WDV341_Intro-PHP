<?php

//$currentDate = date("d/m/Y");

	//Get the Event data from the server.
	try {
	  
		require 'PDOConnection.php';	//CONNECT to the database
		
		//mysql DATE stores data in a YYYY-MM-DD format
		$todaysDate = date("Y-m-d");		//use today's date as the default input to the date( )
		

		$sql = "(SELECT event_id, event_name, event_description, event_presenter, event_date, event_time FROM wdv341_event)";
	  
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

		table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 8px;
	  width: 500px;
	}

	tr:nth-child(even) {
	  background-color: #dddddd;
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

	<table>
		<tr>
			<th>ID</th>
			<th>Event name</th>
			<th>Event Description</th>
			<th>Event Presenter</th>
			<th>Event Date</th>
			<th>Event Time</th>
			<th>Update</th>
		</tr>

<?php 
			while( $row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		?>		
						
				<tr>
					<form action="update.php" method="post">
						<td><?php echo $row['event_id']?></td>
						<td><input type="text" name="pname" value="<?php echo $row['event_name']?>"></td>
						<td><input type="text" name="description" value="<?php echo $row['event_description']?>"></td>   
						<td><input type="text" name="presenter" value="<?php echo $row['event_presenter']?>"></td>   
						<td><input type="text" name="date" value="<?php echo $row['event_date']?>"> </td>   
						<td><input type="text" name="time" value="<?php echo $row['event_time']?>"></td>   
						<input type="hidden" name="id" value="<?php echo $row['event_id']?>">
						<td><input type="submit"> </td> 
					</form>
				</tr>
			
        <?php
			}
		?>	
	</table>

<?php
	//Close the database connection	
?>
</div>	
</body>
</html>
