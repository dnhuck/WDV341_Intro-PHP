// JavaScript Document

var validInput = function(inValue){
	inValue += "";	//turns all inValues into strings
	if(inValue.trim() == "" || inValue == 'null' || inValue == 'undefined'){
		return false;
	}
	return true;
}

module.exports = validInput;


/*
	Validate Phone Number Test Plan
	Input Values	|	Expected Outcome
	------------------------------------
	123					fail (not 10 digits)
	4175599451			pass
	417559945			fail
	515234eeee			fail (contains letters)
	(417)559-9451		pass
	417-335-1903		pass
	465-123-444433		fail
	null				fail
	""					fail
	*					fail
	$					fail
	%,@					fail
	^^^					fail
	+=					fail
	123-123-1234		pass
*/