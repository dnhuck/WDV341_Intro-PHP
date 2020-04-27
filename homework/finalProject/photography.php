<?php
    //require 'events.php';
    try {
	  
		require 'PDOConnection.php';	//CONNECT to the database
		
		//mysql DATE stores data in a YYYY-MM-DD format
		$todaysDate = date("Y-m-d");		//use today's date as the default input to the date( )
		

		$sql = "(SELECT pic_id, pic_name, pic_description, pic_location, date_taken, DATE_FORMAT(date_taken, '%D %M %Y'),  pic_image FROM upload_pic)";
	  
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>photography</title>
</head>
<body>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<title>photography</title>
<link href="css/websiteStyleSheet.css" rel="stylesheet" type="text/css">
<link href="scss/websiteStyleSheet.scss" rel="stylesheet" type="text/scss">
<link href="css/photos.css" rel="stylesheet" type="text/css">
<link href="scss/photos.scss" rel="stylesheet" type="text/scss">
<link href="css/validUser.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header id="header">
		<div class="row">
			<div class="column1">
				<img src="images/portfolioImage.jpg" alt="David Huck" id="portfolioImage">
			</div>
			<div class="column2">
				<h1>David Huck | Web Developer</h1>
				
				<nav id="nav">
					<ul id="navUl">
						<li><a href="index.html">Home</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="homeWork.html">Homework</a></li>
						<li><a href="photography.php">Photography</a></li>
                        <li><a href="contact.html">Contact Me</a></li>
                        <li><a href="login.php">Log In</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	
    <h2 class="heading">Photography Portfolio</h2>
    <div class="flex-container">
        <?php 
                    while( $row=$stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <figure>
                <h3>ID: <?php echo $row['pic_id']; ?></h3>
                <img src="uploads/<?php echo $row['pic_image']; ?>" name="image" id="image">
                <figcaption>Name: <?php echo $row['pic_name']; ?></figcaption>
                <p>Description: <?php echo $row['pic_description']; ?></p>
                <p>Locaton: <?php echo $row['pic_location']; ?></p>
                <p>Date Taken: <?php echo $row['date_taken']; ?></p>
            </figure>
        <?php } ?>
    </div>
	<footer>
		<div class="row">
			<div class="column5">
				<h3>Contact Me:</h3>
				<ul>
					<li>Email: Davidhuck08@gmail.com</li>
					<li>Phone: 417-559-9451</li>
					<li>Des Moines, IA</li>
				</ul>
			</div>
			
			<div class="column6">
				<h3>Social Media</h3>
				<ul>
					<li><a href="https://www.facebook.com/profile.php?id=100009059158931" target="_blank">Facebook</a></li>
					<li><a href="https://www.instagram.com/david_huck_/?hl=en" target="_blank">Instagram</a></li>
					<li><a href="https://github.com/dnhuck" target="_blank">Github</a></li>
					<li><a href="https://www.linkedin.com/in/david-huck-332558170/" target="_blank">LinkedIn</a></li>
				</ul>
			</div>
		</div>
		<h4>&copy;Copywrite<span id="copywriteYear"></span></h4>
	</footer>
	<script src="js/copywriteYear.js"></script>
</body>
</html>