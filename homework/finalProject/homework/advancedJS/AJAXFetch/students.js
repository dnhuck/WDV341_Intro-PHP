$(document).ready(function(){

    document.querySelector('#display').addEventListener('click', displayStudents);
	
	function displayStudents(){
		
		fetch('output.json')
		
		.then((response) => response.json())
		
		.then((data => {
			let output = '<h2>Users</h2>';
			data.forEach(function(student){
				output += `
				<ul class="student">
					<li>Student ID: ${student.student_id}</li>
					<li>Student First Name: ${student.student_first_name}</li>
					<li>Student Last Name: ${student.student_last_name}</li>
					<li>Student Major: ${student.student_major}</li>
					<li>Student Credits: ${student.student_credits}</li>
					<li>Student GPA: ${student.student_gpa}</li>
					<li>Student Registration Date: ${student.student_registration_date}</li>
				</ul>
				`
			})
			document.querySelector('#output').innerHTML = output;
		}))
		.catch((error) => console.log(error))
	}
	
	$('#displayJquery').click(function(){
		
		let $students = $("#output2");
		
		$.ajax({
			url: "output.json",
			dataType: "json",
			method: "GET",
			success: function(students){
				$.each(students), function(i, student){
					$students.append('<ul class="student">' +
									 '<li>Student ID: '+student.student_id+' </li>' + 
									 '<li>Student First Name: '+student.student_first_name+' </li>' +
									 '<li>Student Last Name: '+student.student_last_name+' </li>' +
									 '<li>Student Major: '+student.student_major+' </li>' +
									 '<li>Student Credits: '+student.student_credits+' </li>' +
									 '<li>Student GPA: '+student.student_gpa+' </li>' +
									 '<li>Student Registration Date: '+student.student_registration_date+' </li>' +
									 '</ul>'
									);
				};
			}
		})
	});
		
});