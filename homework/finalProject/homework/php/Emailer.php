<?php
	//echo "<h1>WDV341 Intro PHP</h1>";
	//echo "<h2>Project - Emailer Class</h2>";
	echo "<h3>Emailer Class - Part 1</h3>";
	
	class Emailer {
		// This class will process a php email and send it
		
		//propery delaration
		
		//access identifier property name
		//private means you cannot access the property outside the object
		
		private $message = ""; 
		private $recipientEmail = "";
		private $senderEmail = "";
		private $subject = "";
		
		//constructor method
			//1. DOES NOT MAKE A NEW OBJECT!
			//2. initializes new object default values
		
		public function __construct(){
			
		}
		
		//methods
		
			//setter methods - used to set property values into the object
			//		one method per property
			
			public function set_message($inVal){
				$this->message = $inVal; // assign input to message
			}
		
			public function set_recipientEmail($inVal){
				$this->recipientEmail = $inVal;
			}
		
			public function set_senderEmail($inVal){
				$this->senderEmail = $inVal;
			}
		
			public function set_subject($inVal){
				$this->subject = $inVal;
			}
		
			//getter methods - return the property value from the object
			//		one method per property
			
			public function get_message(){
				return $this->message;
			}
		
			public function get_recipientEmail(){
				return $this->recipientEmail;
			}
		
			public function get_senderEmail(){
				return $this->senderEmail;
			}
		
			public function get_subject(){
				return $this->subject;
			}
			
			//processing methods - everything else
		
			public function sendEmail(){
				// this will format and send an email to the SMTP server
				// it will use the PHP mail()
				
				$to = $this->get_recipientEmail();
				$subject = $this->get_subject();
				$message = $this->get_message();
				$headers = "From: <contact@davidhuck.net>";
				
				return mail($to,$subject,$message,$headers); // PHP Function
				
			}
		
	}


?>

<!-- output, store, parameter -->











