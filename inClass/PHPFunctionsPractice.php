<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Using PHP to output css,html, and javascript</title>
	
	<style>
		<?php
		echo "h1 {background-color:orange;}";
		echo "h3 {background-color:lightblue;}";
		?>
	</style>
	
	<script>
		<?php 
			echo "let name='David';"; 
		?>
		
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
	

</body>
</html>