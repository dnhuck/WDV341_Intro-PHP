// JavaScript Document

let findAndReplace = function(inVal){
	
	let rep = inVal.trim().replace(/[<>'/]/g, "-");
								
	if(rep.includes(">", "<", "/") || rep == "" || rep == "null" || rep == "undefined"){
		return false;
	}						   
	return true;
	
}

module.exports = findAndReplace;