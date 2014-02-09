

<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
      if (array_key_exists('password', $_POST)) {
        echo "You wrote:<pre>\n";
        echo htmlspecialchars($_POST['password']);
        echo "\n</pre>";
      }
    ?>
<p>Create a Password with atleast 8 characters, a lower case letter, an upper case letter and a number.</p>

<p id="demo"></p>
<form class="form-inline" action="/PWSubmit/testscript.php" method="post">
<input name = "password" id="password"type="text" onkeyup="myFunction()" />
<input class="btn" type="submit" value="login" />
</form>
<script src="/PWSubmit/javascripts/passwordVerify.js"></script>
</body>
</html>