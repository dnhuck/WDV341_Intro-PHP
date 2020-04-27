// JavaScript Document

let count = 0;

function val1()
{
	let input1 = document.getElementById("value1").value;// get info entered by the user into the fist textfield
	
	let total = parseFloat(input1);
	
	document.getElementById("returnVal1").value = total;
}

function val2()
{
	let input2 = document.getElementById("value2").value;// get info entered by the user into the fist textfield
	
	let total = parseFloat(input2);
	
	document.getElementById("returnVal2").value = total;
}
 
function addNumbers()
{
	//console.log("addNumbers"); // test to see if the function was working
	let input1 = document.getElementById("value1").value;// get info entered by the user into the fist textfield
	
	let input2 = document.getElementById("value2").value;// get info entered by the user into the second textfield
	
	let total = parseFloat(input1) + parseFloat(input2); // 
	
	document.getElementById("addingNumbers").value = total // //PUT the new value on the form so the user can see the result
}
	


function multiplyNumbers(){
	
	//console.log("addNumbers"); // test to see if the function was working
	let input1 = document.getElementById("value1").value;// get info entered by the user into the fist textfield
	
	let input2 = document.getElementById("value2").value;// get info entered by the user into the second textfield
	
	let total = parseFloat(input1) * parseFloat(input2); // 
	
	document.getElementById("multiply").value = total ////PUT the new value on the form so the user can see the result
}
	
function incCounter(){
	//let input1 = document.getElementById("count").value;
	
	    document.getElementById("numCount").value = count++
}





















