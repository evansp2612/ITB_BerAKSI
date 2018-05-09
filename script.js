function checkForm() {
	// Fetching values from all input fields and storing them in variables.
	var username = document.getElementById("username").innerHTML;
    var email = document.getElementById("email").innerHTML;
    var fullname = document.forms["myForm"]["fullname"].value;
    var password = document.forms["myForm"]["password"].value;
    var confirmpassword = document.forms["myForm"]["confirmpassword"].value;

	//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
	if ((password == '') || (fullname == ''))
		alert("Fill All Fields")
	else if ((username != '✔') || (email != '✔')) 
		alert("Fill Valid Information")
	else if (password != confirmpassword)
		alert("Password Doesn't Match")
	else
		document.getElementById("myForm").submit();
}

// AJAX code to check input field values when onblur event triggerd.
function validate(field, query) {
	var xmlhttp;
	if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { // for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			document.getElementById(field).innerHTML = xmlhttp.responseText;
	}
	xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
	xmlhttp.send();
}