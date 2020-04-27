<?php

	$yourName = 'David Huck';
	$number1 = 10;
	$number2 = 9;
	$total = $number1 + $number2;
	$languages = ['PHP', 'HTML', 'JavaScript'];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Basics</title>
</head>

<body>
	
	<h1>PHP Basics</h1>
	<h2><?php echo $yourName; ?></h2>
	<h2><?php echo 'Displaying values below:'; ?></h2>
	
	<p><?php echo $number1; ?></p>
	<p><?php echo $number2; ?></p>
	<p><?php echo $total; ?></p>
	
	<h2>JS Array using PHP</h2>
	
	<script>
		<?php
		echo "let name = ['PHP', 'HTML', 'JavaScript'];";
		echo "for (i=0; i< name.length; i++){document.write(name[i] + '<br>');}";
		?>
	</script>
	
	<h2>PHP Array</h2>
	<?php
		foreach ($languages as $codes){
		echo $codes . "<br>";
	}
	?>
	
</body>
</html>
