<?php

//require 'display.php';
//require 'insertEvents.php';

$msg = "";

if(isset($_POST['upload'])){
    $target = "uploads/".basename($_FILES['image']['name']);

    require 'PDOConnection.php';
    require 'insertEvents.php';

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg = 'Success';
    }else{
        $msg = 'Fail';
    }

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload New</title>
</head>
<body>
    <h1>Uplaod Image</h1>
    <div id="content">
    <?php
        try {
	  
            require 'PDOConnection.php';	//CONNECT to the database
            
            //mysql DATE stores data in a YYYY-MM-DD format
            $todaysDate = date("Y-m-d");		//use today's date as the default input to the date( )
            
            //Create the SQL command string
            $sql = "SELECT ";
            $sql .= "event_id, ";
            $sql .= "image ";
            $sql .= "FROM wdv341_event";
              
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

        <?php 
			while( $row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		?>
            <p><?php echo $row['event_id']; ?></p>
			<p><img src="uploads/<?php echo $row['image']; ?>"> </p>
		<?php
			}
		?>	



        <form method="POST" action="index.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">

            <div>
                <input type="file" name="image">
            </div>

            <p> 
                <input type="submit" name="upload" value="UPLOAD">
            </p>

        </form>
    </div>
</body>
</html>