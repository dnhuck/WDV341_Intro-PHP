<?php
	$fName = ""; // Established with initial value. global scoped
	$lName = ""; //

	$fName = "Mark"; // assign a value to variables
	$lName = "Wahlburg";
	
	function outputFullName1(){
		global $fName, $lName; // access the global variables inside the function
		echo "$lName, $fName";
		echo "<br>";
		echo $lName . ", " . $fName;
		echo "<br>";
	}

	function outputFullName2($inLastName, $inFirstName){
		echo "$inLastName, $inFirstName";
		echo "<br>";
		echo $inLastName . ", " . $inFirstName;
		echo "<br>";
	}

	function outputFullName3($inFirstName, $inLastName){
		return "$inLastName, $inFirstName";
	}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Using PHP to output css,html, and javascript</title>	
	<style>
		body{
			/*background-color: lightgray;*/
			<?php//echo "color:blue;";?>
		}
		<?php echo "h1 {background-color:orange;}";	echo "h3 {background-color:orangered;}";?>
	</style>
	<script>
		<?php echo "let name='David';"; ?>
		console.log(name);
	</script>
</head>

<body>
	<?php
		echo "<h1>WDV341 Intro PHP";
		echo "<h2>Unit 2: PHP Basics";
		echo "<h3>Using PHP to output HTML, CSS, and JavaScript</h3>";
		echo "<p>This is a paragraph</p>";
	?>
	
	<?php
		echo "<h2>Unit 3: Functions</h2>"
	?>
	<div>
		<h3>Student Roster 1</h3>
		<?php
			echo outputFullName1();
		?>
		
		<h3>Student Roster 2</h3>
		<?php
			echo outputFullName2('Huck', 'David');
			echo outputFullName2('Goldberg', 'Joe');
		?>
		
		<h3>Student Roster 3</h3>
		<?php
			echo outputFullName3("Robin", "Moore");
			echo "<br>";
			echo outputFullName3("Johny", "Hopkins");
			echo "<br>";
			echo outputFullName3("Sloan", "Ketterman");
		?>
	</div>
</body>
</html>


















