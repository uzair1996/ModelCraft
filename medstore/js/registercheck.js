var username = document.forms["vform"]["username"];
var email = document.forms["vform"]["email"];
var medicalename = document.forms["vform"]["medicalename"];
var password= document.forms["vform"]["passsword"];
var repassword = document.forms["vform"]["repassword"];


var name_error = document.getElementById("name_error");
var email_error = document.getElementById("email_error");
var medicalename_error = document.getElementById("medicalename_error");
var password_error = document.getElementById("password_error");
var repassword_error = document.getElementById("repassword_error");

username.addEventListener("blur", nameVerify, true);
email.addEventListener("blur", emailVerify, true);
medicalename.addEventListener("blur", medicalenameVerify, true);
password.addEventListener("blur", passwordVerify, true);
repassword.addEventListener("blur", repasswordVerify, true);

function Validate(){
	if (username.value == "") {
		username.style.border = "1px solid red";
		name_error.textContent = "username is required";
		username.focus();
		return false;
	}
	if (email.value == "") {
		email.style.border = "1px solid red";
		email_error.textContent = "email is required";
		email.focus();
		return false;
	}
	if (medicalename.value == "") {
		medicalename.style.border = "1px solid red";
		medicalename_error.textContent = "medicalename is required";
		medicalename.focus();
		return false;
	}
	if (password.value == "") {
		password.style.border = "1px solid red";
		password_error.textContent = "password is required";
		password.focus();
		return false;
	}
	if (repassword.value == "") {
		repassword.style.border = "1px solid red";
		repassword_error.textContent = "repassword is required";
		repassword.focus();
		return false;
	}
	
}
function nameVerify(){
	if (username.value !=  "") {
		username.style.border = "1px solid #5E6E66";
		username_error.innerHTML = "";
		return true;
	}
}
function emailVerify(){
	if (email.value !=  "") {
		email.style.border = "1px solid #5E6E66";
		emailerror.innerHTML = "";
		return true;
	}
}function medicalenameVerify(){
	if (medicalename.value !=  "") {
		medicalename.style.border = "1px solid #5E6E66";
		medicalename_error.innerHTML = "";
		return true;
	}
}function passwordVerify(){
	if (password.value !=  "") {
		password.style.border = "1px solid #5E6E66";
		password_error.innerHTML = "";
		return true;
	}
}function repasswordVerify(){
	if (repassword.value !=  "") {
		repassword.style.border = "1px solid #5E6E66";
		repassword_error.innerHTML = "";
		return true;
	}
}