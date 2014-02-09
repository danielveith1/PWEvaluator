

<!DOCTYPE html>
<html>
<head>
<head>
<link rel="stylesheet" type="text/css" href="/PWSubmit/stylesheets/main.css">
</head>
<?php
require_once( __DIR__. '/static/password.php');
function GetConnection()
{
	global $password;
	$conn = new mysqli('localhost','root', $password, 'test');
	if($conn->connect_errno > 0){
		die('Unable to connect to database [' . $conn->connect_error . ']');
}
	
	return $conn;
}
function Get($id)
	{
	$conn = GetConnection();
	$results = $conn->query("SELECT * FROM bad_password WHERE pname='$id'");
	$row = $results->fetch_assoc();
	$conn->close();
	return $row;
			
        }
?>
</head>
<body>


<p>Create a Password with atleast 8 characters, a lower case letter, an upper case letter and a number.</p>
<form class="form-inline" action="/PWSubmit/testscript.php" method="post">
<input name = "password" id="password"type="text" onkeyup="myFunction()" />
<input id = "btn1" class="btn" type="submit" value="test" />
</form>
<script src="/PWSubmit/javascripts/passwordVerify.js"></script>
<p id="Perfect" class="good"></p>
<p id="Issues" class="bad"></p>
<?php
	if (isset($_POST['password'])) {
		
		$value = Get($_POST['password']);
		if ( is_null($value)){
			echo " <p class=\"good\"> The password you wrote is not in the table and can be used.</p>";
		}
		else{
			echo "<p class=\"bad\"> The password you wrote is in the table. </p>";
		}
       
      }
    ?>

</body>
</html>