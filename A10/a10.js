function getClasses(elem) {
	document.getElementById("partOne").innerHTML = '["'
			+ elem[0].className.split(" ") + '"]';
}

function addClass(elem, cName) {
	elem[1].className += " " + cName;
	document.getElementById("partTwo").innerHTML = '["'
			+ elem[1].className.split(" ") + '"]';
}

function validateForm() {
	var valName = document.getElementsByName("name");
	var valEmail = document.getElementsByName("email");
	var valPassword = document.getElementsByName("password");
	var valConfirm = document.getElementsByName("confirm");

	if (valName[0].value == null || valName[0].value == "") {
		valName[0].setAttribute("style", "background-color:red;");
		alert("Please fill in Username.");
	}
	
	if (valEmail[0].value == null || valEmail[0].value == "") {
		valEmail[0].setAttribute("style", "background-color:red;");
		alert("Please fill in E-mail.");
	}

	if (valPassword[0].value == null || valPassword[0].value == "") {
		valPassword[0].setAttribute("style", "background-color:red;");
		alert("Please fill in Password.");
	}
	
	if (valConfirm[0].value == null || valConfirm[0].value == "") {
		valConfirm[0].setAttribute("style", "background-color:red;");
		alert("Please confirm your Password.");
	}
	
    if (valPassword[0].value != valConfirm[0].value) {
		valPassword[0].setAttribute("style", "background-color:red;");
		valConfirm[0].setAttribute("style", "background-color:red;");
    	alert("Please confirm that your passwords match.")
    }	
}