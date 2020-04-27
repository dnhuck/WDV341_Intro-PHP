<!-- Update the form to be a PHP self posting form.
Implement PHP validations for each field.  The validation requirements for each field are listed on the page.  You do NOT need Javascript validations for this project.
Validate the input fields on the server using PHP. Use regular expressions and patterns for this whenever possible.  If there are any invalid fields display the appropriate error messages, apply a CSS style to the error fields. Put all form data back into the appropriate fields. Display to the user. 
Protect your form with one of the methods discussed in the class. 
When the form inputs are valid display a confirmation message to the page instead of the form. -->
<?php

	// assigning default values to form inputs

	$inEmailLogin = "";
	$inFirstName = "";
	$inLastName = "";
	$inProgramSelect = "";
	$inSecondaryProgramSelect = "";
	$inWebsiteAddress = "";
	$inSecondaryWebsite = "";
	$inPersonalEmail = "";
	$inLinkedIn = "";
	$inHometown = "";
	$inCareerGoals = "";
	$inThreeWordDescription = "";

	// assigning default error values to form inputs

	$inEmailLoginErrMsg = "";
	$firstNameError = "";
	$lastNameError = "";
	$programError = "";
	$programError2 = "";
	$websiteAddressError = "";
	$emailError = "";
	$linkedInError = "";
	$hometownError = "";
	$careerGoalsError = "";
	$threeWordsError = "";

	if(isset($_POST["submitBio"])){
		
		echo "<h1>Thank you for submititng the form!</h1>";
		
		// capturing the values of the form inputs
		$inEmailLogin = $_POST['emailToLogin'];
		$inFirstName = $_POST['firstName'];
		$inLastName = $_POST['lastName'];
		
		// dropdowns 
		
			$inProgramSelect = $_POST['program'];
		
		
		
			$inSecondaryProgramSelect = $_POST['program2'];
		
		
		$inWebsiteAddress = $_POST['websiteAddress'];
		$inPersonalEmail = $_POST['email'];
		$inLinkedIn = $_POST['linkedIn'];
		$inSecondaryWebsite = $_POST['websiteAddress2'];
		$inHometown = $_POST['hometown'];
		$inCareerGoals = $_POST['careerGoals'];
		$inThreeWordDescription = $_POST['threeWords'];
		
		// displaying outputs
		/*echo $inEmailLogin . "<br>";
		echo $inFirstName . "<br>";
		echo $inLastName . "<br>";
		echo $inProgramSelect . "<br>";
		echo $inSecondaryProgramSelect . "<br>";
		echo $inWebsiteAddress . "<br>";
		echo $inPersonalEmail . "<br>";
		echo $inSecondaryWebsite . "<br>";
		echo $inLinkedIn . "<br>";
		echo $inHometown . "<br>";
		echo $inCareerGoals . "<br>";
		echo $inThreeWordDescription; */
		
		$validForm = true; // sets a flag/switch to make sure data is valid
		// PHP validation goes here
		
		if($validForm){
			echo "Successfully Submitted!";
		}
		else{
			
					$inEmailLoginErrMsg = "Invalid Email Login Field";
					$firstNameError = "Invalid first name Field";
					$lastNameError = "Invalid last name Field";
					$programError = "Invalid program Field";
					$programError2 = "Invalid Email Login Field";
					$websiteAddressError = "Invalid Email Login Field";
					$emailError = "Invalid Email Login Field";
					$linkedInError = "Invalid Email Login Field";
					$hometownError = "Invalid Email Login Field";
					$careerGoalsError = "Invalid Email Login Field";
					$threeWordsError = "Invalid Email Login Field";
			
		}
		
	}
	else
	{
		echo "<h1>Please Submit the form</h1>";
	}



?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>DMACC Portfolio Day Bio Form</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  
  <!-- css3-mediaqueries.js for IE less than 9 -->

<script src="css3-mediaqueries.js"></script>
<script src="jquery-3.2.1.js"></script>
<script>

	$(document).ready(function(){
		if( $("select[name=program]	option:selected").val() == "webDevelopment")
		{
			$(".secondWeb").css("display", "inline");
		}
		else
		{
			$(".secondWeb").css("display", "none");
		}
		
		$("select#program").change(function(){
			if( $("select#program option:checked").val() == "webDevelopment")
			{
				$(".secondWeb").css("display", "inline");
			}
			else
			{
				$(".secondWeb").css("display", "none");
			}
		});
		
		function resetForm(){
			$("#firstName").val("");
			$("#lastName").val("");
			$("#program").val("default");
			$("#websiteAddress").val("");
			$("#websiteAddress2").val("");
			$("#email").val("");
			$("#hometown").val("");
			$("#careerGoals").val("");
			$("#threeWords").val("");
		}
	});
	
	
	</script>
  
  <style>
	img{
		display: block;
		margin: 0 auto;
	}
	.frame{
		background-image: url("orange popsicle.jpg");
		padding: 1em;	
	}
	.frame2{
		background-image: url("citrus.jpg");
		padding: 1.3em;	
	}	
	body{
		background-image: url("bodacious.png");
		margin: 1.5em;
	}
	
	.main {
		padding: 1em;
		background-color: white;
	}
	form{
		text-align: center;
	}
	h2 {
		text-align: center;
	}
	.robotic{
		display: none;
	}

	.form {
		background-color:white;
		padding-left: 5em;
	}
	p {
		align:left;
	}	
	.citrus{
		margin: auto;
		background-image: url("raspberry.jpg");
		padding: 1.3em;	
		width: 70%;
	}
	.bamboo{
		background-image: url("bamboo.jpg");
		padding: 1em;	
	}	
	.violet{
		background-image: url("ultra violet.png");
		padding: .5em;	
	}	
	.secondWeb{
		display: none;
	}
	table{
		margin: auto;
	}
	table td{
		padding-bottom: .75em;
	}
	.error{
		font-style: italic;
		color: #d42a58;
		font-weight: bold;
	}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  img {
    width:100%;
  }
  .form {
	width:100%; 
	padding-left: .1em;
	padding-top: .1em;
  }
  .citrus {
	background-image:none;  
  }
  .bamboo {
	background-image:none;  
  } 
  .violet {
	background-image:none;  
  }  
  .secondWeb{
		display: none;
	}  
  table{
		margin: auto;
	}
  table td{
		padding-bottom: .5em;
	}
}
	
  </style>
  
<!-- Input Field validations. 

validateFirstName
	// valid first name should only include letters, numbers, and spaces
	// ... must be present


validateLastName
	// valid last name should only include letters, numbers and spaces
	// ... must be present

validateProgram
	//valid program must not be default options

validateWebsiteAddress
	//valid URL format

validateWebsiteAddress2
	//valid URL format	

validateLinkedIn
	//valid URL to linkedin.com

validateEmail
	//valid email should be in a proper format  
	//Matches: bob@aol.com | bob@wrox.co.uk | bob@domain.info |123@123.123
	//Non-Matches: a@b | notanemail | bob@@.

validateHometown
	// valid name should only include letters, numbers, spaces, and commas
	// ... must be present

validateCareerGoals
	//valid career goals should include only numbers, letters, spaces, and basic punctuation

validateThreeWords
	//valid three-words should include only numbers, letters, spaces, and basic punctuation

-->
  
</head>

<section class="orange">
<body>
<div class="frame2">
<div class="frame">

  <div class="main">
  <div><img src="madonna.gif" alt="Mix gif" ></div>
  <br>

<!--<a href = 'dmaccPortfolioDayLogout.php'>Log Out</a>-->

<section class="citrus">
<section class="bamboo">
<section class="violet">

	<div class="main form">
	
	<h2></h2>
	</table>
	<form id="portfolioBioForm" method="post" action="studentInfoForm.php">
		
		<table>
		<tr>
		<td>Login Email:<br> <input type="text" id="emailToLogin" name="emailToLogin" value="<?php echo $inEmailLogin; ?>"/><span><?php echo $inEmailLoginErrMsg; ?></span></td>
		</tr>
		<tr>
		<td>First Name:<br> <input type="text" id="firstName" name="firstName" value="<?php echo $inFirstName; ?>"/><br><span class="error" id="firstNameError" ></span><?php echo $firstNameError; ?></td>
		</tr>
		<tr>
		<td>Last Name:<br> <input type="text" id="lastName" name="lastName" value="<?php echo $inLastName; ?>" /><br><span class="error" id="lastNameError" ><?php echo $lastNameError; ?></span></td>
		</tr>
		<tr>
		<td >Program:<br> <select id="program" name="program">
				<option value="default" <?php if (isset($inProgramSelect) && $inProgramSelect=="") echo "selected";?>>---Select Your Program---</option>
				<option value="animation" <?php if (isset($inProgramSelect) && $inProgramSelect=="animation") echo "selected";?>>Animation</option>
				<option value="graphicDesign" <?php if (isset($inProgramSelect) && $inProgramSelect=="graphicDesign") echo "selected";?>>Graphic Design</option>
				<option value="photography" <?php if (isset($inProgramSelect) && $inProgramSelect=="photography") echo "selected";?>>Photography</option>
				<option value="videoProduction" <?php if (isset($inProgramSelect) && $inProgramSelect=="videoProduction") echo "selected";?>>Video Production</option>
				<option value="webDevelopment" <?php if (isset($inProgramSelect) && $inProgramSelect=="webDevelopment") echo "selected";?>>Web Development</option>
			</select><br><span class="error" id="programError"><?php echo $programError; ?></span><td>
		</tr>
		<tr>
		<td >Secondary Program:<br> 
			<select id="program2" name="program2">
				<option value="none" <?php if (isset($inSecondaryProgramSelect) && $inSecondaryProgramSelect=="") echo "selected";?>> ---No Secondary Program--- </option>
				<option value="animation" <?php if (isset($inSecondaryProgramSelect) && $inSecondaryProgramSelect=="animation") echo "selected";?>>Animation</option>
				<option value="graphicDesign" <?php if (isset($inSecondaryProgramSelect) && $inSecondaryProgramSelect=="graphicDesign") echo "selected";?>>Graphic Design</option>
				<option value="photography" <?php if (isset($inSecondaryProgramSelect) && $inSecondaryProgramSelect=="phtography") echo "selected";?>>Photography</option>
				<option value="videoProduction" <?php if (isset($inSecondaryProgramSelect) && $inSecondaryProgramSelect=="videoProduction") echo "selected";?>>Video Production</option>
				<option value="webDevelopment" <?php if (isset($inSecondaryProgramSelect) && $inSecondaryProgramSelect=="webDevelopment") echo "selected";?>>Web Development</option>
			</select>
			<br><span class="error" id="program2Error" ><?php echo $programError2; ?></span><td>
		</tr>
		<tr>
		<td>Website Address:<br> <input type="text" id="websiteAddress" name="websiteAddress" value="<?php echo $inWebsiteAddress; ?>"/><br><span class="error" id="websiteAddressError"><?php echo $websiteAddressError; ?></span></td>
		</tr>
		<tr>
		<td>Personal Email:<br><input type="text" id="email" name="email" value="<?php echo $inPersonalEmail; ?>" /><br><span class="error" id="emailError"><?php echo $emailError; ?></span></td>
		</tr>
		<tr>
		<td>LinkedIn Profile:<br><input type="text" id="linkedIn" name="linkedIn" value="<?php echo $inLinkedIn; ?>" /><br><span class="error" id="linkedInError"><?php echo $linkedInError; ?></span></td>
		<tr>
		<td><span class="secondWeb">Secondary Website Address (git repository, etc.):<br> <input type="text" id="websiteAddress2" name="websiteAddress2" value="<?php echo $inSecondaryWebsite; ?>"/><br><span class="error" id="websiteAddress2Error" ></span></span></td>
		</tr>
		<tr>
		<td>Hometown:<br> <input type="text" id="hometown" name="hometown" value="<?php echo $inHometown; ?>"/><br><span class="error" id="hometownError"><?php echo $hometownError; ?></span></td>
		</tr>
		<tr>
		<td>Career Goals:<br> <textarea id="careerGoals" name="careerGoals"><?php echo $inCareerGoals; ?> </textarea><br><span class="error" id="careerGoalsError"><?php echo $careerGoalsError; ?></span></td>
		</tr>
		<tr>
		<td>3 Words that Describe You:<br> <input type="text" id="threeWords" name="threeWords" value="<?php echo $inThreeWordDescription; ?>"/><br><span class="error" id="threeWordsError"><?php echo $threeWordsError; ?></span></td>
		<p class="robotic" id="pot">
			<label>Leave Blank</label>
			<input type="hidden" name="inRobotest" id="inRobotest" class="inRobotest" />
		</p>
		<input type="hidden" id="submitConfirm" name="submitConfirm" value="submitConfirm"/>
		</tr>
		<tr>
		<td><input type="submit" id="submitBio" name="submitBio" value="Submit Bio" /></td>
		</tr>
		<tr>
		<td><input type="reset" id="resetBio" name="resetBio" value="Reset Bio"/></td>
		</tr>
		</table>
	</form>

	</div>
	

</section>	
</section>
</section>
  
</div>

</body>
</section>

</html>
