function myFunction()
{
var password = document.getElementById('password').value;
var hasNumber = false;
var hasLowerCase = false;
var hasUpperCase = false;
var res = "";
if( password.length >= 8 ){
	for( var i = 0; i< password.length; i++){
	if ( ! isNaN(password[i]) ){
		hasNumber = true;
	}
	else if( password[i].toUpperCase() !== password[i].toLowerCase){
		if ( password[i] === password[i].toUpperCase()){
			hasUpperCase = true;
		}
		else{
			hasLowerCase = true;
		}
}
	else{
	// character is neither a number or a letter and is a symbol
	}
}
	if( hasNumber && hasLowerCase && hasUpperCase ){
		res = "Password is good. <br>";
	}
	if( !hasNumber ){
		res = "Password needs a number. <br>";
	}
	if( !hasLowerCase ) {
		res = res + "Password needs a lower case letter. <br>";
	}
	if( !hasUpperCase ) {
		res = res + "Password needs an upper case letter.";
	}
}
else{
		res = "Password must be 8 characters or more.";
}
document.getElementById("demo").innerHTML=res;
}