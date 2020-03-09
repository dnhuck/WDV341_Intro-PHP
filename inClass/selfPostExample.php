<?php

	// assign a defalt value to input fields and error messages

	$inProdName = "";
	$inProdPrice = "";
	$inRadio = "";

	$prodNameErrMsg = "";
	$prodPriceErrMsg = "";
	$prodRadioErrMsg = "";

	if(isset($_POST["prod_submit"]))
	{	
		echo "<h1>Thank you for submitting the form</h1>";
		
		// capturing the values of the form inputs
		$inProdName = $_POST["prod_name"];
		$inProdPrice = $_POST["prod_price"];
		if(isset($_POST["radio"])){ // if radio is checked, store the value
			$inRadio = $_POST["radio"];
		}
		
		// displayng outputs of values in the form
		echo "<p>Product Name: $inProdName</p>";
		echo "<p>Product Price: $inProdPrice</p>";
		echo "<p>Product Color: $inRadio</p>";
		
		$validForm = false; // sets a flag/switch to make sure data is valid
		// PHP validation goes here
		
		if($validForm){
			// Yes good data - Do database stuff here
		}
		else{
			// BAD BAD Data - Display error message, display form to user
			// 1. bad name 
				// put data on the form
				// put error messege on the form
					$prodNameErrMsg = "Invalid Name Field";
				// $validForm=false
			// 2. bad price
					$prodPriceErrMsg = "Invalid Price Amount";
			// 3. select a radio button	
					$prodRadioErrMsg = "Select a Wagon Color";
		}
		
		
	}
	else{
		echo "<h1>Please enter your information</h1>";
	}
			
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<h1>WDV341 Intro PHP </h1>
<h2>Unit-8 Self Posting Form</h2>
<h3>Example Form</h3>
<p>Converting a form to a self posting form.</p>
<form name="form1" method="post" action="selfPostExample.php">
  <p>
    <label for="prod_name">Product Name: </label>
    <input type="text" name="prod_name" id="prod_name" value="<?php echo $inProdName; ?>">
	<span><?php echo $prodNameErrMsg; ?></span>
  </p>
  <p>
    <label for="prod_price">Product Price: </label>
    <input type="text" name="prod_price" id="prod_price" value="<?php echo $inProdPrice; ?>">
	<span><?php echo $prodPriceErrMsg; ?> </span>
  </p>
  <p>Product Color:	<span><?php echo $prodRadioErrMsg ?></span></p>
	
  <p>
    <input type="radio" name="radio" id="prod_red" 
	<?php if ($inRadio=="prod_red") echo "checked";?>
	value="prod_red">
    <label for="prod_red">Red Wagon<br></label>
    <input type="radio" name="radio" id="prod_green"
	<?php if ($inRadio=="prod_green") echo "checked";?>
	value="prod_green">
    <label for="prod_green">Green Wagon</label>
  </p>
  <p>
    <input type="submit" name="prod_submit" id="prod_submit" value="Submit">
    <input type="reset" name="Reset" id="button" value="Reset">
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>