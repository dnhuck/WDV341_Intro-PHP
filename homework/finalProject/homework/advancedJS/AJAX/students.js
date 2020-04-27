$(document).ready(function(){

    document.querySelector('#display').addEventListener('click', displayStudents);

    function displayStudents(){

        let xhr = new XMLHttpRequest();
        xhr.open('GET', 'output.json', true);

        xhr.onload = function(){
            if(this.status == 200){
                let studentObjects = JSON.parse(this.responseText);

                let output ='';
                
                for(let i in studentObjects){
                    output += 
                    '<div class="student">' +
                    '<ul>' +
                    '<li>Student ID: ' + studentObjects[i].student_id + '</li>' + 
                    '<li>Student First Name: ' + studentObjects[i].student_first_name + '</li>' + 
                    '<li>Student Last Name: ' + studentObjects[i].student_last_name + '</li>' + 
                    '<li>Student Major: ' + studentObjects[i].student_major + '</li>' + 
                    '<li>Student Credits: ' + studentObjects[i].student_credits + '</li>' + 
                    '<li>Student GPA: ' + studentObjects[i].student_gpa + '</li>' + 
                    '<li>Student Registration: ' + studentObjects[i].student_registration_date + '</li>' + 
                    '</ul>' +
                    '</div>';
                }

                document.querySelector('#output').innerHTML = output;
            }
        }

        xhr.send();
    }

});