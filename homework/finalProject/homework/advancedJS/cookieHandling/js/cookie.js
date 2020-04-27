/* JavaScript Document
-Provide a link on the home page to the about page.  
-Use a persistent (for 3 days) cookie to count the number of times the home page has been accessed.  Display the results on the about page. 
-Use a session cookie to store what website the user was viewing before coming to the home page.  Display the result on the about page. The value of this cookie should only be set once when entering the home page. 
-Create a button on the home page that will create a secured persistent (6 months) authentication cookie. 
The about page will check for the authentication cookie, if available display the about page, otherwise return to the home page. 
-Create a button on the about page that will destroy all of the cookies so you can test this application.   
Present your project to the class.  Discuss how your application works. */

$(document).ready(function(){
	let expDate = new Date ();
	let newExpDate = expDate.setTime (expDate.getTime() + (24 * 60 * 60 * 1000 * 3) );
	
	function addCookie(tag, value, expiredDate) {
		let expireDate = new Date();
		let expireString = "";
		expireDate.setTime(expireDate.getTime() + (1000 * 60 * 60 * 24 * expiredDate) ); //expires in three days
		expireString = "expires="+ expireDate.toGMTString();
		document.cookie = tag + "=" + encodeURI(value) + ";" + expireString + ";"
  }
	
	function getCookie(tag) {
		let value = null;
		let myCookie = document.cookie + ";";
		let findTag = tag + "=";
		let endPos;
		if (myCookie.length > 0 ) {
		  let beginPos = myCookie.indexOf(findTag);
			
		  if (beginPos != -1) {
				beginPos = beginPos + findTag.length;
				endPos = myCookie.indexOf(";", beginPos);
				if (endPos == -1)
				    endPos = myCookie.length;
					value = decodeURI(myCookie.substring(beginPos, endPos));
			  }
		} 
	   return value   
  } 

	function deleteCookie(tag) {
		let Yesterday = 24 * 60 * 60 * 1000;
		let expireDate = new Date();
		expireDate.setTime (expireDate.getTime() - Yesterday);
		document.cookie = tag + "=nothing; expires=" + expireDate.toGMTString();
	}
	
	function setCookie(name, value, expires, path, domain, secure) {
	  let thisCookie = name + "=" + encodeURI(value) +
		  //((expires) ? "; expires=" + expires.toGMTString() : "") +
		  ((path) ? "; path=" + path : "") +
		  ((domain) ? "; domain=" + domain : "") +
		  ((secure) ? "; secure" : "");
	  document.cookie = thisCookie;
	}
	
	// CREATING A FUNCTION FOR NUMBER OF TIMES THE SITE HAS BEEN VISITED
	function visitCounter(){
		let visits = getCookie("counter");
		setCookie("counter", visits);
		visits = parseInt(visits) + 1; 
		$("#displayTimesVisited").html("You have been here " + visits + " times.");
		setCookie("counter", visits, newExpDate);
		}
	
	// CREATING FUNCTION FOR LAST SITE VISITED
	function lastSite(){
		let strName = document.referrer;
		addCookie("lastVisited", strName)
		$("#lastPage").html("The last site visited was: " + strName);
	}
	
	// VERIFICATION COOKIE
	$("#button").click(function(){
		var strName = window.prompt("Enter your name", "");
		//create cookie element named 'UserName' with a value stored in strName
		addCookie("signOn",strName, 182);
		let getCookieSignOn = getCookie("signOn");
		
		if(getCookieSignOn == "null" || getCookieSignOn == "" || getCookieSignOn == "undefined"){
			   		location.href = "http://davidhuck.net/homework/advancedJS/cookieHandling/index.html";
		}
		else{
			if(getCookieSignOn == strName){
			   		location.href = "http://davidhuck.net/homework/advancedJS/cookieHandling/about.html";
			   }
		}
	});
	
	$("#button1").click(function(){
		alert("delete all cookies");
		deleteCookie("signOn");
		deleteCookie("lastVisited");
		deleteCookie("counter");
	});

	// Calling Functions
	visitCounter();
	lastSite();
});
	

