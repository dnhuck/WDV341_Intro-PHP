<?php

	// assign a defalt value to input fields and error messages
	$inLoginUsername = "";
	$inLoginPassword = "";

    // error messages
	$inLoginUsernameErrMsg = "";
	$inLoginPasswordErrMsg = "";

if(isset($_POST["submit"]))
	{
		// capturing the values of the form inputs
		$inLoginUsername = $_POST["username"];
		$inLoginPassword = $_POST["password"];
	
        $validForm = true; // sets a flag/switch to make sure data is valid
        // PHP validation goes here
		
		if($validForm && $inLoginUsername == 'wdv341' && $inLoginPassword == 'wdv341'){
			
                //require('validUser.php');
                echo '<script>alert("valid")</script>';
                header("Location: validUser.php");
			
			} else{
			
			// BAD BAD Data - Display error message, display form to user
			// 1. bad name
				// put data on the form
				// put error messege on the form
					$inLoginUsernameErrMsg = " Invalid Username";
                    $inLoginPasswordErrMsg = " Invalid Password";
                    	
				}
	
	}else{
		echo "<h1>Please enter your information</h1>";
		}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
    .container{
        border: 2px solid black;
        width: 1000px;
        padding: 10px;
        margin: auto;
    }

    h1, h2, h3{
        text-align: center;
    }

    #column{
        display: flex;
    }

    #row1{
        flex: 40%;
        text-align: right;
        margin-right: 5px;
    }

    #row2{
        flex: 60%;
    }

    #buttons{
        text-align: center;
    }
</style>
<title>Events Form</title>
</head>

<body>
    <div class="container">
        <div id="heading">
            <h1>WDV341 Intro PHP</h1>
            <h2>Unit 11</h2>
            <h3>Create a login.php page </h3>
        </div>
        
        <form method="post" action="login.php">
            <div id="column">
                <div id="row1">	
                    <p>
                        <label for="username">Username:</label>
                    </p>
                    <p>
                        <label for="password">Password:</label>
                    </p>
                </div>
                <div id="row2">
                    <p>
                        <input type="text" name="username" id="username" value="<?php echo $inLoginUsername; ?>"><span><?php echo $inLoginUsernameErrMsg; ?> </span>
                    </p>
                    <p>
                        <input type="text" name="password" id="password" value="<?php echo $inLoginPassword; ?>"><span><?php echo $inLoginPasswordErrMsg; ?></span>
                    </p>
                </div>
            </div>
            
            <div id="buttons">
                <input type="submit" name="submit" id="submit" value="Submit">
                <input type="reset" name="reset" id="reset" value="Reset">
            </div>
        </form>
	</div>
</body>
</html>