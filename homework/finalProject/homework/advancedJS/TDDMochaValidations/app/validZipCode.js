// JavaScript Document

let validateZipCode = function(inValue){
		
	if(inValue == "" || inValue == 'null' || inValue == 'undefined' || inValue.toString().length > 5 || inValue.toString().length < 5 || isNaN(inValue)){
		return false;
	}
	return true;
}

module.exports = validateZipCode;
