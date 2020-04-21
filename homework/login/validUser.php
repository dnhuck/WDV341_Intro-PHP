<?php

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
		$inEventName = $_POST["eventName"];
		$inEventDescription = $_POST["eventDescription"];
		$inEventPresenter = $_POST["eventPresenter"];
		$inEventDate = $_POST["eventDate"];
        $inEventTime = $_POST["eventTime"];

        $target = "images/".basename($_FILES['image']['name']);

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
                $inEventNameErrMsg = "Invalid Event Name Field";
                $inEventDescriptionErrMsg = "Invalid Event Description";	
                $inEventPresenterErrMsg = "Invalid Event Presenter";
                $inEventDateErrMsg = "Invalid Event Date";	
                $inEventTimeErrMsg = "Invalid Event Time";	
                    	
				}
	
	}else{
		echo "<h1>Please enter your information</h1>";
		}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>Events Form</title>
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script src="login.js"></script>
</head>

<body>
    <div class="container">
        <div id="heading">
            <h1>Administrator</h1>
            <h3>Create a login.php page </h3>
        </div>
        
        <form method="POST" action="validUser.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <h1>Add Event:</h1>
            <div id="column">
                <div id="row1">
                    <p>
                        <label for="eventName">Event Name:</label><span>
                    </p>
                    <p>
                        <label for="eventDecription">Event Description:</label>
                    </p>
                    <p>
                        <label for="eventPresenter">Event Presenter:</label>
                    </p>
                    <p>
                        <label for="eventDate">Event Date:</label>
                    </p>
                    <p>
                        <label for="eventTime">Event Time:</label>
                    </p>
                    <p>
                        <label for="ebentImage">Event Image:</label>
                    </p>
                </div>

                <div id="row2">
                    <p>
                        <input type="text" name="eventName" id="eventName" value="<?php echo $inEventName; ?>" required><?php echo $inEventNameErrMsg; ?></span>
                    </p>
                    <p>
                        <input type="text" name="eventDescription" id="eventDescription" value="<?php echo $inEventDescription; ?>" required><span><?php echo $inEventDescriptionErrMsg; ?> </span>
                    </p>
                    <p>
                        <input type="text" name="eventPresenter" id="eventPresenter" value="<?php echo $inEventPresenter; ?>" required><span><?php echo $inEventPresenterErrMsg; ?> </span>
                    </p>
                    <p>
                        <input type="text" name="eventDate" id="eventDate" value="<?php echo $inEventDate; ?>" required><span><?php echo $inEventDateErrMsg; ?> </span>
                    </p>
                    <p>
                        <input type="text" name="eventTime" id="eventTime" value="<?php echo $inEventTime; ?>" required><span><?php echo $inEventTimeErrMsg; ?> </span>
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
        <h1>Events:</h1>
        <div class="buttons">
            <button id="hideEvents">Hide Events</button>
            <button id="showEvents">Show Events</button>
        </div>
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
                        <span class="displayEvent">Event Date: <?php echo $row['event_date']; ?></span>
                    </div>
                    
                    <div>
                        <span class="displayEvent">Event Image: <img src="images/<?php echo $row['event_image']; ?>" name="image" id="image"></span>
                    </div>

                    <div>
                        <a href="delete.php?id=<?php echo $row['event_id']; ?>">Delete</a>
                    </div>

                </div>
            </p>

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
                                <label for="presenter">Presenter: </label>
                            </p>
                            <p>
                                <label for="date">Date: </label>
                            </p>
                            <p>
                                <label for="time">Time: </label>
                            </p>
                        </div>
                        
                        <div id="row2">
                            <p>
                                <input type="text" name="pname" value="<?php echo $row['event_name']?>">
                            </p>
                            <p>
                                <input type="text" name="description" value="<?php echo $row['event_description']?>">   
                            </p>
                            <p>
                                <input type="text" name="presenter" value="<?php echo $row['event_presenter']?>">
                            </p>
                            <p>
                                <input type="text" name="date" value="<?php echo $row['event_date']?>">
                            </p>
                            <p>
                                <input type="text" name="time" value="<?php echo $row['event_time']?>">  
                                <input type="hidden" name="id" value="<?php echo $row['event_id']?>"> 
                            </p>
                        </div>
                    </div>
                    <div class="buttons">
                        <input type="submit">
                    </div>
				</form>
            </div>
           
            
            <?php
                }
                //$eventDate = $sql['event_date'];
            ?>

        </div>
	</div>
</body>
</html>