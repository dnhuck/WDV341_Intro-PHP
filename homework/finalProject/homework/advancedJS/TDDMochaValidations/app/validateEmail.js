// JavaScript Document

let validateEmailAddress = function(inValue){
	
	let regEmailEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if(regEmailEx.test(inValue)){
		return true;
	}
	return false;
}

module.exports = validateEmailAddress;