// JavaScript Document

/*
-Use the attached XML file for this assignment as your source data. 
-Using a Javascript Object
-Create a Javascript object called jsJavaBook using the first <book> source file.
-Create a javascript object called jsVBBook using the second <book> source file.
-Create a javascript object called jsTextbooks that will contain the book objects.
-Using a JSON Object
-Create a JSON object called JavaBook using the first in the source file.
-Create a JSON object called VB6Book using the second <book> in the source file.
-Create a JSON object called textbooks that will contain the book objects.
*/

$(document).ready(function(){
// JAVASCRIPT OBJECTS
let jsJavaBook = {isbn:"0-596-00016-2", title:"Java and XML", price:"39.95", publisher:"O'Reilly &amp; Associates", author:"Brett Mclaughlin", copywrite:"2000", comments:"update Required"};

let jsVBBook = {isbn:"1-861003-32-3", title:"Professional Visual Basic 6 XML", price:"49.99", publisher:"Wrox Press", author:"James Britt", authorTwo:"Tuen Duynstee",  copywrite:"2000", comments:"Outdated text. Switch to C#"};

let jsTextbooks = {bookOne:"jsJavaBook", bookTwo:"jsVBBook"};

// JSON OBJECTS USING JSON.Stringify()
let JavaBook = JSON.stringify(jsJavaBook);
let VB6Book = JSON.stringify(jsVBBook);
let textbooks = JSON.stringify(jsTextbooks);

// DOCUMENTING JSON OBJECTS
let JsonObjects = [JavaBook, VB6Book, textbooks];
let objectLength = JsonObjects.length;
	
	text = "";
		for (i = 0; i < objectLength; i++) {
			text += "<p>" + JsonObjects[i] + "</p>";
			}
			text += "";
			$("#testJSON").html(text);

});


