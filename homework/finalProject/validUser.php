<?php

session_start();

if(!$_SESSION['validUser'] == true){
	header('Location: login.php');
}

require 'events.php';

$msg = "";
$inEventName = "";
$inEventDescription = "";
$inEventPresenter = "";
$inEventDate = "";
$inEventTime = "";

$inEventNameErrMsg = "";
$inEventDescriptionErrMsg = "";
$inEventPresenterErrMsg = "";
$inEventDateErrMsg = "";
$inEventTimeErrMsg = "";

if(isset($_POST["submit"]))
	{
		// capturing the values of the form inputs
		$inEventName = $_POST["picName"];
		$inEventDescription = $_POST["picDescription"];
		$inEventPresenter = $_POST["picLocation"];
		$inEventDate = $_POST["dateTaken"];

        $target = "uploads/".basename($_FILES['image']['name']);

        require 'PDOConnection.php';
        require 'insertEvents.php';

        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            $msg = 'Success';
        }else{
            $msg = 'Fail';
        }
	
        $validForm = true; // sets a flag/switch to make sure data is valid
        // PHP validation goes here
		
		if($validForm){
			
                require('PDOConnection.php');
                //echo '<script>alert("valid")</script>';
			
			} else{
			
			// BAD BAD Data - Display error message, display form to user
			// 1. bad name
				// put data on the form
				// put error messege on the form
                $inEventNameErrMsg = "Invalid Name";
                $inEventDescriptionErrMsg = "Invalid Description";	
                $inEventPresenterErrMsg = "Invalid Location";
                $inEventDateErrMsg = "Invalid Date";	                    	
				}
	
	}else{
		}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/validUser.css" rel="stylesheet" type="text/css">
<title>Events Form</title>
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div id="heading">
            <h1>Administrator View</h1>
        </div>
        
        <form method="POST" action="validUser.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <h1>Add Event:</h1>
            <div id="column">
                <div id="row1">
                    <p>
                        <label for="picName">Picture Name:</label>
                    </p>
                    <p>
                        <label for="picDescription">Picture Description:</label>
                    </p>
                    <p>
                        <label for="picLocation">Picture Location:</label>
                    </p>
                    <p>
                        <label for="dateTaken">Date Taken:</label>
                    </p>
                    <p>
                        <label for="image">Upload Image:</label>
                    </p>
                </div>

                <div id="row2">
                    <p>
                        <input type="text" name="picName" id="picName" value="<?php echo $inEventName; ?>" required><?php echo $inEventNameErrMsg; ?></span>
                    </p>
                    <p>
                        <input type="text" name="picDescription" id="picDescription" value="<?php echo $inEventDescription; ?>" required><span><?php echo $inEventDescriptionErrMsg; ?> </span>
                    </p>
                    <p>
                        <input type="text" name="picLocation" id="picLocation" value="<?php echo $inEventPresenter; ?>" required><span><?php echo $inEventPresenterErrMsg; ?> </span>
                    </p>
                    <p>
                        <input type="text" name="dateTaken" id="dateTaken" value="<?php echo $inEventDate; ?>" required><span><?php echo $inEventDateErrMsg; ?> </span>
                    </p>
                    <p>
                        <input type="file" name="image">
                    </p>
                </div>
            </div>
            <div class="buttons">
                    <input type="submit" name="submit" id="submit" value="Submit">
                    <input type="reset" name="reset" id="reset" value="Reset">
                </div>
        </form>

        <div id="events">
        <h1>Pictures:</h1>
        <div class="flex-container">
            <?php 
                while( $row=$stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
	        <p>
                <div class="eventBlock">
                    	
                        <figure>
                            <h3>ID: <?php echo $row['pic_id']; ?></h3>
                            <img src="uploads/<?php echo $row['pic_image']; ?>" name="image" id="image">
                            <figcaption>Name: <?php echo $row['pic_name']; ?></figcaption>
                            <p>Description: <?php echo $row['pic_description']; ?></p>
                            <p>Locaton: <?php echo $row['pic_location']; ?></p>
                            <p>Date Taken: <?php echo $row['date_taken']; ?></p>
                            <div id="updateDatabase">
                                <form action="update.php" method="post" id="updateDB">
                                        <div id="column">
                                            <div id="row1">
                                                <p>
                                                    <label for="pname">Name: </label>
                                                </p>
                                                <p>
                                                    <label for="description">Description: </label>
                                                </p>
                                                <p>
                                                    <label for="location">Location: </label>
                                                </p>
                                                <p>
                                                    <label for="dateTaken">Date Taken: </label>
                                                </p>
                                            </div>
                                            
                                            <div id="row2">
                                                <p>
                                                    <input type="text" name="pname" value="<?php echo $row['pic_name']?>">
                                                </p>
                                                <p>
                                                    <input type="text" name="description" value="<?php echo $row['pic_description']?>">   
                                                </p>
                                                <p>
                                                    <input type="text" name="location" value="<?php echo $row['pic_location']?>">
                                                </p>
                                                <p>
                                                    <input type="text" name="dateTaken" value="<?php echo $row['date_taken']?>">
                                                </p>
                                                <p>
                                                    <input type="hidden" name="id" value="<?php echo $row['pic_id']?>"> 
                                                </p>
                                            </div>
                                        </div>
                                    <div class="buttons">
                                        <input type="submit">
                                    </div>
                                </form>
                    
                            <p><a href="delete.php?id=<?php echo $row['pic_id']; ?>">Delete</a></p>
                        </figure>
                    </div>
                </div>
            </p>
            
            <?php
                }
            ?>
        </div>
        </div>

        <div id="logout">
                <a href="logout.php">Logout</a>
        </div>
	</div>
</body>
</html>