// JavaScript Document

function compareNumbers(){
	let numOne = document.getElementById("value1").value.trim();
	
	let numTwo = document.getElementById("value2").value.trim();
	
		if (numOne == numTwo)
		{
			document.getElementById("result").innerHTML = " Value 1 is equal to Value 2"
		}
		else
		{
			if(numOne > numTwo)
				{
				document.getElementById("result").innerHTML = " Value 1 is greater than Value 2"
				}
				
				else
				{
				document.getElementById("result").innerHTML = " Value 2 is greater than Value 1"				
				}
		}
	
	if(isNaN(numTwo) || isNaN(numOne) )
		{
			document.getElementById("result").innerHTML = " Enter a Valid Number"
		}
	
	if(numOne == "" || numTwo == "")
		{
			document.getElementById("result").innerHTML = " Enter a Valid Number"
		}
}
	
