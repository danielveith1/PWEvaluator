function myFunction()
{
var password = document.getElementById('password').value;
var hasNumber = false;
var hasLowerCase = false;
var hasUpperCase = false;
var clickable = false;
var ret1 ="";
var ret2= "";
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
		ret1 = "Password is good. <br>";
		clickable = true;
	}
	if( !hasNumber ){
		ret2 = "Password needs a number. <br>";
	}
	if( !hasLowerCase ) {
		ret2 = ret2 + "Password needs a lower case letter. <br>";
	}
	if( !hasUpperCase ) {
		ret2 = ret2 + "Password needs an upper case letter.";
	}
}
else{
		ret2 = "Password must be 8 characters or more.";
}
if( clickable){
document.getElementById("btn1").disabled = false;
}
else{
document.getElementById("btn1").disabled = true;
}
document.getElementById("Perfect").innerHTML= ret1;
document.getElementById("Issues").innerHTML=ret2;
}