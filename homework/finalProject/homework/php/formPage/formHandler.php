<?php
    $captcha;

    	if(isset($_POST['g-recaptcha-response']))
        $captcha=$_POST['g-recaptcha-response'];

    if(!$captcha){
		//header('Location: eventsForm.php');
		echo 'fill out recaptcha';
		//exit;
    }

    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdFKNoUAAAAACZDlBAnaU8AL1MZzWtwAGKd_BV6&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
    if($response['success'] == false)
    {
        //echo '<h2>You are spammer</h2>';
    }
    else
    {
        echo '<h2>Thanks for posting comment.</h2>';
    }
?>


