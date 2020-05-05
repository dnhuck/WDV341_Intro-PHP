<?php

session_start();

if(!$_SESSION['validUser'] == true){
	header('Location: login.php');
}

try {
      
    require 'PDOConnection.php';
    require 'events.php';	//CONNECT to the database
    
    //mysql DATE stores data in a YYYY-MM-DD format
    $todaysDate = date("Y-m-d");		//use today's date as the default input to the date( )
    

   $sql = "UPDATE upload_pic SET pic_name='$_POST[pname]', pic_description='$_POST[description]', pic_location='$_POST[location]', date_taken='$_POST[dateTaken]' WHERE pic_id='$_POST[id]'";

  
    //PREPARE the SQL statement
    $stmt = $conn->prepare($sql);
    
    //EXECUTE the prepared statement
    $stmt->execute();		
    
    //Prepared statement result will deliver an associative array
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

   echo "<script>alert('Update Successfull!')</script>";
   header("refresh: 1; url=validUser.php");
    
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