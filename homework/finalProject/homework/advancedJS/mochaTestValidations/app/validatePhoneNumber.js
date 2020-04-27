// JavaScript Document
let validatePhoneNumber = function(inValue){
	if(inValue == "" || inValue == 'null' || inValue == 'undefined' || inValue.length > 10 || isNaN(inValue)){
		return false;
	}
	return true;
}

module.exports = validatePhoneNumber;