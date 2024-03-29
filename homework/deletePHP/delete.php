<?php

try {
      
    require 'PDOConnection.php';
    require 'displayEvents.php';	//CONNECT to the database
    
    //mysql DATE stores data in a YYYY-MM-DD format
    $todaysDate = date("Y-m-d");		//use today's date as the default input to the date( )
    

   $sql = "DELETE FROM `wdv341_event` WHERE event_id='$_GET[id]'";

  
    //PREPARE the SQL statement
    $stmt = $conn->prepare($sql);
    
    //EXECUTE the prepared statement
    $stmt->execute();		
    
    //Prepared statement result will deliver an associative array
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    //header("refresh:2; url:displayEvents.php");
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