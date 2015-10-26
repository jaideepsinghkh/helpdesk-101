//Validate registration input.
function validate() {
	
	//Declare validation values as 'false' to prevent improper registration.
	var valid1 = false;
	var valid2 = false;
	var valid3 = false;
	var valid4 = false;
	var valid5 = false;
	var valid6 = false;
	var valid7 = false;
	
	
	//Assign values to outcome of other validation functions. The desired result is 'true' in all cases, to allow registration.
	valid1 = checkName();
	valid2 = checkAddress();
	valid3 = checkEmail();
	valid4 = checkGender();
	valid5 = checkPassword();
	valid6 = checkPasswordConfirm();
	valid7 = checkPasswordMatch();
	
	
	//Cancel submission by returning 'false' if any validation functions returned false. If all 'true', allow submission by returning 'true'.
	if (valid1 == false || valid2 == false || valid3 == false || valid4 == false || valid5 == false || valid6 == false || valid7 == false){
		return false;
	}
		
	return true;
}

//Check whether or not a surname has been submitted (i.e. if the surname box is not blank). If not, display an error.
function checkfName() {
	if (form1.surname.value == "") {
		document.getElementById("firstnameMissing").style.visibility = "visible";
		document.getElementById("firstname").focus();
		return false;
	}
	return true;
}
function checkName() {
	if (form1.surname.value == "") {
		document.getElementById("surnameMissing").style.visibility = "visible";
		document.getElementById("surname").focus();
		return false;
	}
	return true;
}
//Hide the surname error if one is entered.
function dismissSurnameWarning() {
	document.getElementById("surnameMissing").style.visibility = "hidden";
}
function dismissfnameWarning() {
	document.getElementById("firstnameMissingnameMissing").style.visibility = "hidden";
}
//Check whether or not an address has been submitted (i.e. if the address box is not blank). If not, display an error.
function checkAddress() {
	if (form1.address.value == "") {
		document.getElementById("addressMissing").style.visibility = "visible";
		document.getElementById("address").focus();
		return false;
	}
	return true;
}

//Hide the address error if one is entered.
function dismissAddressWarning() {
	document.getElementById("addressMissing").style.visibility = "hidden";
}

//Check whether or not a valid email address with the correct syntax has been submitted (i.e. if the email box is not blank, and contains an '@' symbol). If not, display an error.
function checkEmail(){
	if (!(/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/.test(form1.email.value))) {
		document.getElementById("invalidEmail").style.visibility = "visible";
		document.getElementById("email").focus();
		return false;
	}
	return true
}

//Hide the email error if a valid one is entered.
function dismissEmailWarning() {
	document.getElementById("invalidEmail").style.visibility = "hidden";
}





//Check if either gender has been selected. Otherwise, display an error.
// function checkGender(){
	// if (document.getElementById('sexMale').checked) {
		// return true
	// } else if(document.getElementById('sexFemale').checked) {
		// return true
	// } else {
		// window.alert("Please select a gender.");
		// return false
	// }
// }

//Check whether or not a password has been submitted (i.e. if the password box is not blank). If not, display an error.
function checkPassword() {
	if (form1.password.value == "") {
		document.getElementById("passwordMissing").style.visibility = "visible";
		document.getElementById("password").focus();
		return false;
	}
	return true;
}

//Hide the password error if one is entered. Will also remove the password match error.
function dismissPasswordWarning() {
	document.getElementById("passwordMissing").style.visibility = "hidden";
	document.getElementById("invalidPasswordMatch").style.visibility = "hidden";
}

//Check whether or not a password has been confirmed (i.e. if the password confirmation box is not blank). If not, display an error.
function checkPasswordConfirm() {
	if (form1.passwordConfirm.value == "") {
		document.getElementById("passwordConfirmMissing").style.visibility = "visible";
		document.getElementById("passwordConfirm").focus();
		return false;
	}
	return true;
}

//Hide the password confirmation error if one is entered. Will also remove the password match error.
function dismissPasswordConfirmWarning() {
	document.getElementById("passwordConfirmMissing").style.visibility = "hidden";
	document.getElementById("invalidPasswordMatch").style.visibility = "hidden";
}

//Check whether or not the password has been correctly confirmed (i.e. if the content of the password and password confirmation boxes match). If not, display an error.
function checkPasswordMatch() {
	if (form1.password.value != form1.passwordConfirm.value) {
		document.getElementById("invalidPasswordMatch").style.visibility = "visible";
		return false;
	}
	return true;
}



//The following code was used to display alert boxes for the three different password errors.

// function checkPassword() {
	// if (form1.password.value == "") {
		// window.alert("Please enter a password.");
		// return false;
	// } else if (form1.passwordConfirm.value == "") {
		// window.alert("Please confirm your password.");
		// return false;
	// } else if (form1.password.value != form1.passwordConfirm.value) {
		// window.alert("Passwords do not match.");
		// return false;
	// } else {
		// return true;
	// }
// }