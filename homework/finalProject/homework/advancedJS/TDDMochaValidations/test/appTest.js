// JavaScript Document

let assert = require('chai').assert;	//Chai assertion library
let validEmail = require('../app/validateEmail');
let validZip = require('../app/validZipCode');
let findReplace = require('../app/findReplace');

describe('Testing Email Input', function(){
	
	/*
	Validate Email Address Test Plan
	Input Values	|	Expected Outcome
	------------------------------------
	417559945			fail
	dnhuck@dmacc.edu    Pass
	1234@hotmail.com	pass
	417-335-1903		fail
	null				fail
	""					fail
	*					fail
	$					fail
	%,@					fail
	+=					fail
	jerty@fmail 		fail
	davidhuck@gmail.com pass
*/
	
	it("The letter a should not pass", function(){
		assert.isFalse(validEmail('a'));		
	});
	
	it('4175599451 should fail', function(){
		assert.isFalse(validEmail(4175599451));
	});
	
	it('dnhuck@dmacc.edu should pass', function(){
		assert.isTrue(validEmail('dnhuck@dmacc.edu'))
	});
	
	it('123 should fail', function(){
		assert.isFalse(validEmail(123));
	});
	
	it('$ should fail', function(){
		assert.isFalse(validEmail('$'));
	});
	
	it('davidhuck08@gmail.com should pass', function(){
		assert.isTrue(validEmail('davidhuck08@gmail.com'));
	});
	
	it('jerty@fmail should fail', function(){
		assert.isFalse(validEmail('jerty@fmail'));
	});
	
	it('empty should fail', function(){
		assert.isFalse(validEmail(''));
	});
	
	it('null should fail', function(){
		assert.isFalse(validEmail('null'));
	});
	
	it('undefined should fail', function(){
		assert.isFalse(validEmail('undefined'));
	});
	
});

/*
	Validate Email Address Test Plan
	Input Values	|	Expected Outcome
	------------------------------------
	413     			fail
	undefined           fail
	50327           	pass
	417-335-1903		fail
	null				fail
	""					fail
	1234				fail
	123456				fail
	90210				pass
	50246				pass
*/

// FORMAT IS A VALID US 5 DIGIT ZIP CODE
describe('validate zip code', function(){
	
	it('413 should fail', function(){
		assert.isFalse(validZip(413));	
	});
	
	it('undefined should fail', function(){
		assert.isFalse(validZip('undefined'));	
	});
	
	it('50327 should pass', function(){
		assert.isTrue(validZip(50327));	
	});
	
	it('417-335-1014 should fail', function(){
		assert.isFalse(validZip(417-335-1014));	
	});
	
	it('null should fail', function(){
		assert.isFalse(validZip('null'));
	});
	
	it('empty should fail', function(){
		assert.isFalse(validZip(""));	
	});
	
	it('1234 should fail', function(){
		assert.isFalse(validZip(1234));	
	});
	
	it('123456 should fail', function(){
		assert.isFalse(validZip(123456));	
	});
	
	it('90210 should pass', function(){
		assert.isTrue(validZip(90210));	
	});
	
	it('50246 should pass', function(){
		assert.isTrue(validZip(50246));	
	});
	
	it('12345 should pass', function(){
		assert.isTrue(validZip(12345));	
	});
	
});

describe('finding <>/ and replacing with -', function(){
	
	/*
	Validate Email Address Test Plan
	Input Values	|	Expected Outcome
	------------------------------------
	*       			fail
	<                   pass
	null             	fail
	undefined    		fail
	9   				pass
	""					fail
	1234				pass
	>   				pass
	/   				pass
	-   				pass
*/
	
	it('the<test should pass',function(){
		assert.isTrue(findReplace('the<test'));
	});
	
	it('- should pass',function(){
		assert.isTrue(findReplace('-'));
	});
	 
	it('null should not pass',function(){
		assert.isFalse(findReplace('null'));
	});
	
	it('undefined should not pass',function(){
		assert.isFalse(findReplace('undefined'));
	});
	
	it('empty should not pass',function(){
		assert.isFalse(findReplace(""));
	});
	
	it('/ should pass',function(){
		assert.isTrue(findReplace('/'));
	});
	
	it('<> should pass', function(){
		assert.isTrue(findReplace("<>"));
	});
	
	it('1234 should pass', function(){
		assert.isTrue(findReplace("1234"));
	});
});

