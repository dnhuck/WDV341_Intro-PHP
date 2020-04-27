// JavaScript Document
	
let firstName = $("#firstName").val();
let lastName = $("#lastName").val();
let email = $("#email").val();
let message = $("#message").val();
let validation = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
if(firstName == "" || firstName == "null" || firstName == "undefined" ){
	//alert("Please enter a valid first name");
}

if(lastName == "" || lastName == "null" || lastName == "undefined" ){
	//alert("Please enter a valid Last Name");
}

if(!validation.test(email)){
	//alert("Please enter a valid email");
}
	

if(message == "" || message == "null" || message == "undefined" ){
	//alert("Please enter a message");
}
	



