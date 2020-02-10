<?php
	function formatDateMDY(){
		$inDate = date("m" . "/" . "d" . "/" . "Y");
		echo "<h3>Formated Date: mm/dd/yyyy</h3>";
		echo $inDate;
	}

	function formatDateDMY(){
		echo "<h3>Formated Date: dd/mm/yyyy</h3>";
		$inDate = date("d" . "/" . "m" . "/" . "Y");
		echo $inDate;
	}

	function testStringInput(){
		$stringObject = "      This is a string and it does contain DMACC";
		echo '<h2>Testing a string input</h3> The string is as follows: "This is a string and it does contain DMACC"<br>         ';
		echo "The string length is" . " " . strlen($stringObject) . "<br>";
		echo "Trimmed String: " . trim($stringObject) . "<br>";
		echo "Lowercase String: " . strtolower($stringObject) . "<br>";
		echo "Looking for DMACC in the string: ";
		
		if (stripos($stringObject, 'DMACC') !== false) {
    		echo 'true';}
		
		function formatNumber(){
			$inNumber = 1234567890;
			$formattedNumber = number_format($inNumber, 2);
			echo "<br>" . "Formatted Number: " . $formattedNumber . "<br>";
		}
		
		function formatNumberCurrency(){
			$inNumber = 123456;
			$numberToCurrency = number_format($inNumber, 2);
			echo "Number formatted to currency: " . "$" . $numberToCurrency;
			
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Functions</title>
</head>

<body>
	<?php echo "<h1>WDV 341: Intro PHP</h1>"; ?>
	<?php
	echo "<h2>Assignment: PHP Function</h2>"; 
	echo formatDateMDY();
	echo formatDateDMY();
	echo testStringInput();
	echo formatNumber();
	echo formatNumberCurrency();
	?>
</body>
</html>