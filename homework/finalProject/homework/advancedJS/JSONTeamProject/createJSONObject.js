// JavaScript Document
/*
	This file will:
	
	- Create a Javascript object including an array
	- Convert the Javascript object into a JSON object
	- Store the JSON object into local storage
	
	Goal: Provide an example of how to create a JSON object in Javascript
	Goal: Provide an example of how to consume a JSON object in Javascript

	Use the following data for your JSON object

		student_id = 332443
		student_gpa = 3.6
		student_courses = ["WDV101","WDV131","WDV105"]

*/

$(document).ready(function(){
	
	// creating a javascript object 
	let student = {
			   student_id:"332443", 
			   student_gpa:"3.6", 
			   student_courses:["WDV101","WDV131","WDV105"]
			  };

	// saving that javascript object to local storage and creating a JSON object
	localStorage.setItem('student', JSON.stringify(student));

	// retireving the JSON object and creating a javascript object
	let studentRetrieve = JSON.parse(localStorage.getItem('student'));

	// Getting the value of where we want to put each part of the javascript object
	document.getElementById("id").innerHTML += studentRetrieve.student_id;
	document.getElementById("gpa").innerHTML += studentRetrieve.student_gpa;
	
	// creating a loop for the student_couses in an unorded list
	for(let i = 0; i < studentRetrieve.student_courses.length; i++ ){
		document.getElementById("studentCourses").innerHTML += "<li>" + studentRetrieve.student_courses[i] + "</li>";
	}
});


