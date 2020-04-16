<?php

	//Modify the deliverProduct.php file to use the ProductContainer class to instantiate a new object.
	//Load the values indicated above into the object. 
	//Test the page and the object.
	//Use the html page and the AJAX code to call deliverProduct.php page and respond with the requested JSON object.
	//Display the contents on the HTML page.

	class ProductContainer{

		public  $productName = "PHP Textbook"; 
		public  $productPrice = "$129.95";
		public  $productPageCount = "327";
		public $productISBN = "13-1234435690";

		public function __construct(){
			
		}

		// Set Method
		public function set_name($inVal){
			$this->name = $inVal;
		  }

		public function set_price($inVal){
			$this->price = $inVal;
		}

		public function set_pageCount($inVal){
			$this->pageCount = $inVal;
		}

		public function set_ISBN($inVal){
			$this->ISBN = $inVal;
		}

		// Get Method
		public  function get_name(){
			return $this->name;
		  }

		  public  function get_price(){
			return $this->price;
		  }

		  public function get_pageCount(){
			return $this->pageCount;
		  }

		 public function get_ISBN(){
			return $this->ISBN;
		  }

	}

	 // objects
	 $productObj = new productContainer();
	 $productObj->set_name("PHP Textbook");
	 $productObj->set_price("$129.95");
	 $productObj->set_pageCount("327");
	 $productObj->set_ISBN("13-1234435690");

	 //
	$returnObj = json_encode($productObj);	//create the JSON object
//	
	echo $returnObj; 	//send results back to calling program
?>

