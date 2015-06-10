<!DOCTYPE html>

<html>
	<head>
		<title>Password Validator</title>
		
		<link type="text/css" rel="stylesheet" href="stylesheets/index.css"/>
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro|Roboto+Condensed|Oxygen"/>
		<script src="scripts/passwordVerify.js"></script>
		
		<?php
require_once( __DIR__. '/static/password.php');
function GetConnection()
{
	global $password;
	$conn = new mysqli('localhost','root', $password, 'test');
	if($conn->connect_errno){
		die('Unable to connect to database [' . $conn->connect_error . ']');
}
	
	return $conn;
}
function Get($id)
	{
	
	$conn = GetConnection();
	$results = $conn->query("SELECT * FROM bad_password WHERE pname='mysqli_real_escape_string($id)'");
	$row = $results->fetch_assoc();
	$conn->close();
	return $row;
			
        }
?>
	</head>
	<body>
<!---------------------------------Navbar--------------------------------------->	
		<div class="navbar_container">
			<div class="header"><strong>Password Validator</strong><br></div>
					<div class="button_list">	
						<ul>
							<li>	<a href="index.html" class="navbar_home" alt="Home"> Home </a>  </li>
							
						</ul>
					</div>
<!---------------------------------Content--------------------------------------->					
			<div class="main_content_container">
			
<p>Create a Password with atleast 8 characters, a lower case letter, an upper case letter and a number.</p>
<form class="form-inline" action="/PWSubmit/testscript.php" method="post">
<input name = "password" id="password"type="text" onkeyup="myFunction()" />
<input id = "btn1" class="btn" type="submit" value="test" />
</form>

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

			</div>
			</div>
	</body>
</html>


