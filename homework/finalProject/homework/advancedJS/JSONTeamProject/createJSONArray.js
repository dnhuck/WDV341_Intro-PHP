// JavaScript Document
/*
	This file will:
	
	- Create a Javascript object containing an array of records with each record including an array
	- Convert the Javascript object into a JSON object
	- Store the JSON object into local storage
	
	This will be given to students to run as part of a web page that will consume the JSON object
	Goal: Provide an example of how to create a JSON object in JS
	Goal: Provide an example of how to consume a JSON object in JS

	Use the following data for this object:
	
		student_id = 332443
		student_gpa = 3.6
		student_courses = ["WDV101","WDV131","WDV105"]	

		student_id = 545467
		student_gpa = 2.7
		student_courses = ["WDV101","WDV131","WDV105","WDV221","WDV205"]	
		
		student_id = 128574
		student_gpa = 3.4
		student_courses = ["WDV101","WDV131","WDV105","WDV221","WDV205","WDV341"]	
	
		student_id = 750056
		student_gpa = 1.85
		student_courses = ["WDV101","WDV131","WDV105","WDV221","WDV205"]		
*/

$(document).ready(function(){
	
	let students = [
	{
		student_id:"33243",
		student_gpa:"3.6",
		student_courses:["WDV101", "WDV131", "WDV105"]
	},
	
	{
		student_id:"545467",
		student_gpa:"2.7",
		student_courses:["WDV101", "WDV131", "WDV105", "WDV221", "WDV205"]
	},
	
	{
		student_id:"128574",
		student_gpa:"3.4",
		student_courses:["WDV101", "WDV131", "WDV105", "WDV221", "WDV205", "WDV341"]
	},
	
	{
		student_id:"750056",
		student_gpa:"1.85",
		student_courses:["WDV101","WDV131","WDV105","WDV221","WDV205"]
	}
];

// saving that javascript object to local storage and creating a JSON object
	localStorage.setItem('students', JSON.stringify(students));

// retireving the JSON object and creating a javascript object
	let studentRetrieve = JSON.parse(localStorage.getItem('students'));

// student 1
$(".studentId1").append(studentRetrieve[0].student_id);
$(".gpa1").append(studentRetrieve[0].student_gpa);
	
for(let i = 0; i < studentRetrieve[0].student_courses.length; i++ ){
		$(".studentCourses1").append("<li>" + studentRetrieve[0].student_courses[i] + "</li>");
	}
	
// student 2
$(".studentId2").append(studentRetrieve[1].student_id);
$(".gpa2").append(studentRetrieve[1].student_gpa);
	
for(let i = 0; i < studentRetrieve[1].student_courses.length; i++ ){
		$(".studentCourses2").append("<li>" + studentRetrieve[1].student_courses[i] + "</li>");
	}
	
// student 3
$(".studentId3").append(studentRetrieve[2].student_id);
$(".gpa3").append(studentRetrieve[2].student_gpa);
	
for(let i = 0; i < studentRetrieve[2].student_courses.length; i++ ){
		$(".studentCourses3").append("<li>" + studentRetrieve[2].student_courses[i] + "</li>");
	}
	
// student 3
	
$(".studentId4").append(studentRetrieve[3].student_id);
$(".gpa4").append(studentRetrieve[3].student_gpa);
	
for(let i = 0; i < studentRetrieve[3].student_courses.length; i++ ){
		$(".studentCourses4").append("<li>" + studentRetrieve[3].student_courses[i] + "</li>");
	}
	
	
	/* trying to dynamically do it
	function studentCardUpdate(id, gpa, courses){
		let val1 = "<h3>" + id + "</h3>";
		let val2 = "<p>" + gpa + "</p>";
		let val3 = "<ul>" + courses + "</ul>";
		$(".studentCard").html(val1 + val2 + val3);
	}
	
	//studentCardUpdate(studentRetrieve[0].student_id, studentRetrieve[0].student_gpa, studentRetrieve[0].student_courses);
	*/
});















	
	

