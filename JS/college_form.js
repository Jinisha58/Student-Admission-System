document.addEventListener('DOMContentLoaded', function () {
    var numberOfCoursesInput = document.getElementById('numberOfCourses');
    var courseTableDiv = document.getElementById('courseTable');

    numberOfCoursesInput.addEventListener('change', function () {
        var numberOfCourses = parseInt(this.value);
        courseTableDiv.innerHTML = ''; // Clear previous course table

        var table = document.createElement('table');
        table.classList.add('course-table');
        var headerRow = table.insertRow();
        headerRow.innerHTML = '<th>Course_Code</th><th>Course_Name</th><th>Begins At</th><th>Duration</th><th>Admission_fees</th><th>Fee_Structure</th>';

        for (var i = 1; i <= numberOfCourses; i++) {
            var courseNumber = 'course' + i;

            var row = table.insertRow();
            row.innerHTML =
                '<td><input type="text" name="courseCode[]" placeholder="Course code" required></td>' +
                '<td><input type="text" name="courseName[]" placeholder="Course Name" required></td>' +
                '<td><input type="text" name="beginsAt[]" placeholder="Begins At" required></td>' +
                '<td><input type="text" name="duration[]" placeholder="Duration" required></td>' +
                '<td><input type="text" name="admission_fee[]" placeholder="admission_fee" required></td>' +
                '<td><input type="text" name="feeStructure[]" placeholder="Fee_per_sem " required></td>';
        }

        courseTableDiv.appendChild(table);
    });
});

function validateForm() {
    var checkbox = document.getElementById("declarationCheckbox");
    var errorText = document.getElementById("declarationError");

    if (!checkbox.checked) {
        errorText.style.display = "block";
        return false; // Prevent form submission
    }

    errorText.style.display = "none";
    return true; // Allow form submission
}
/*
function validateNum() {
    var phone = document.form.num.value;
    var data= /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-.]?([0-9]{4})$/;
    if(phone==""){
        document.getElementById("messages").innerHTML="Please fill mobile number";
        return false;
    }

    else if(isNaN(phone)){
        document.getElementById("messages").innerHTML="mobile number must be in digit";
        return false;
    }

    else if(!phone.match(data)){
        document.getElementById("messages").innerHTML="mobile number length invalid";
        return false;
    }

    else{ /*((phone.charAt(0)!=9) && (phone.charAt(0)!=8)){
        document.getElementById("messages").innerHTML="mobile number must start with 9 and 8";
        return false;
    }
    return true;
}

function myNum() {
    var a = document.form.phoneNumber.value;
    var data= /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-.]?([0-9]{4})$/;

    if(a==""){
        document.getElementById("message").innerHTML="Please fill mobile number";
        return false;
    }
    else if(isNaN(a)){
        document.getElementById("message").innerHTML="mobile number must be in digit";
        return false;
    }
    else if(!a.match(data)){
        document.getElementById("message").innerHTML="mobile number length invalid";
        return false;

    }
    else{ /*((a.charAt(0)!=9) && (phone.charAt(0)!=8)){
        document.getElementById("message").innerHTML="mobile number must start with 9 and 8";
        return false;
    }
    return true;
}*/

function validateNum() {
    const phoneNumberInput = document.getElementById('num').value;

    // Regular expression for a more comprehensive phone number format
    const phoneNumberPattern = /^\+?(\d{1,3})?[-. ]?\(?(\d{3})\)?[-. ]?\d{3}[-. ]?\d{4}$/;

    if (!phoneNumberPattern.test(phoneNumberInput)) {
        alert('Invalid phone number');
        return false; // Prevent form submission
    }

    // If validation passes, form will submit
    return true;
}



function validatePhoneNumber() {
    const phoneNumberInput = document.getElementById('phoneNumber').value;

    // Regular expression for a more comprehensive phone number format
    const phoneNumberPattern = /^\+?(\d{1,3})?[-. ]?\(?(\d{3})\)?[-. ]?\d{3}[-. ]?\d{4}$/;

    if (!phoneNumberPattern.test(phoneNumberInput)) {
        alert('Invalid phone number');
        return false; // Prevent form submission
    }

    // If validation passes, form will submit
    return true;
}

// Add an event listener to the form to call the validation function before submission
document.querySelector('form').addEventListener('submit', validatePhoneNumber);
