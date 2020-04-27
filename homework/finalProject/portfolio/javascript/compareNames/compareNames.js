// JavaScript Document

function compareNames(){
	
	let val1 = document.getElementById("value1").value.toLowerCase().trim();

	let val2 = document.getElementById("value2").value.toLowerCase().trim();
	
	if(val1 == val2)
		{
			document.getElementById("result").innerHTML = " same";
		}
		else
		{
			document.getElementById("result").innerHTML= " different";	
		}
	if(val1 == "" || val2 == "")
		{
			document.getElementById("result").innerHTML= " enter a valid name";	
		}
	
}


