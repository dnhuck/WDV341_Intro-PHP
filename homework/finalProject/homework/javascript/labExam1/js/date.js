// JavaScript Document
    let today = new Date();
	
	let monthNum = today.getMonth();
	
	let dayNum = today.getDay();
	
	let fullYear = today.getFullYear();
	
	console.log(monthNum + dayNum + fullYear);
	
	function getCurrentDayOfWeek(){
		
		var todaysDate = new Date();			//create a new date object with current date
		
		var dayOfWeek = todaysDate.getDay();	//get the value of the day from current date
		
		//Change the dayOfWeek from a 0-6 number to the name of the day
		switch(dayOfWeek) {
			case 0:
				dayOfWeek = "Sunday";
				break;
			case 1:
				dayOfWeek = "Monday";
				break;
			case 2:
				dayOfWeek = "Tuesday";
				break;
			case 3:
				dayOfWeek = "Wednesay";
				break;
			case 4:
				dayOfWeek = "Thursday";
				break;
			case 5:
				dayOfWeek = "Friday";
				break;
			case 6:
				dayOfWeek = "Saturday";
				break;		
			default:
				dayOfWeek = "";
				break;			
		}
		
		return dayOfWeek;
	}//end of currentDayOfWeek( )

	
	function getCurrentMonthName()
	{
		var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
		
		var todaysDate = new Date();			//create a date object with the current date
		
		return months[ today.getMonth()];	//get the month as a word
	}//end getCurrentMonth( )
	
	function getCurrentYear()
	{
		var todaysDate = new Date();		//create a date object with current date
		
		return todaysDate.getFullYear();	//get the four digit year from the current date
	}//end getCurrentYear( )
	