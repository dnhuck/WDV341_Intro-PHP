<?php
    $captcha;

    if(isset($_POST['g-recaptcha-response']))
        $captcha=$_POST['g-recaptcha-response'];

    if(!$captcha){
        echo '<h2>Please check the the captcha form.</h2>';
        exit;
    }

    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdFKNoUAAAAACZDlBAnaU8AL1MZzWtwAGKd_BV6&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
    if($response['success'] == false)
    {
        echo '<h2>You are spammer</h2>';
    }
    else
    {
        echo '<h2>Thanks for posting comment.</h2>';
    }
?>


<?php
//Model-Controller Area.  The PHP processing code goes in this area. 

	//Method 1.  This uses a loop to read each set of name-value pairs stored in the $_POST array
	$tableBody = "";		//use a variable to store the body of the table being built by the script
	
	foreach($_POST as $key => $value)		//This will loop through each name-value in the $_POST array
	{
		$tableBody .= "<tr>";				//formats beginning of the row
		$tableBody .= "<td>$key</td>";		//dsiplay the name of the name-value pair from the form
		$tableBody .= "<td>$value</td>";	//dispaly the value of the name-value pair from the form
		$tableBody .= "</tr>";				//End this row
	} 
	
	
	//Method 2.  This method pulls the individual name-value pairs from the $_POST using the name
	//as the key in an associative array.  
	
	$inFirstName = $_POST["firstName"];		//Get the value entered in the first name field
	$inLastName = $_POST["lastName"];		//Get the value entered in the last name field
	$inSchool = $_POST["school"];			//Get the value entered in the school field
	$inNotifications = $_POST["notifications"]; // Get the value entered in the notifications field
	$inEmailList = $_POST["emailList"]; // Get the value entered in the email list field
	$inStudentScheduale = $_POST["studentScheduale"]; // Get the value entered in the student scheduale
	$inYearsAttended = $_POST["years_attended"];

?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV 341 Intro PHP - Code Example</title>
</head>

<body>
<h1>WDV341 Intro PHP</h1>
<h2>Form Handler Result Page - Code Example</h2>
<p>This page displays the results of the Server side processing. </p>
<p>The PHP page has been formatted to use the Model-View-Controller (MVC) concepts. </p>
<h3>Display the values from the form using Method 1. Uses a loop to process through the $_POST array</h3>
<p>
	<table border='a'>
    <tr>
    	<th>Field Name</th>
        <th>Value of Field</th>
    </tr>
	<?php echo $tableBody;  ?>
	</table>
</p>
<h3>Display the values from the form using Method 2. Displays the individual values.</h3>
<p>School: <?php echo $inSchool; ?></p>
<p>First Name: <?php echo $inFirstName; ?></p>
<p>Last Name: <?php echo $inLastName; ?></p>
<p>Revieve Notifictions:  <?php echo $inNotifications; ?></p>
<p>Would you like to be added to our email list? <?php echo $inEmailList; ?></p>
<p>Student Scheduale: <?php echo $inStudentScheduale ?></p>
<p>Years Attended: <?php echo $inYearsAttended ?></p>
</body>
</html>
