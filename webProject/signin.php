<?php
    session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Transparent Login Form</title>
		<meta charset="utf_8">
		<link rel="StyleSheet" href="style2.css" type="text/CSS">
	
	</head>
	
	<body>

			<div class="loginBox" >
				<img src="login.png" class="user">
				<br>
				<h2>Log In Here</h2>
				<form action="php/signincheck.php" method="POST">
                    <p>
                        <?php
                        if( (! isSet($_SESSION["user"])) && isSet($_SESSION["errormsg"]) ){
                            echo $_SESSION["errormsg"];
                        }
                        ?>
                    </p>
                    <br>

					<p>Username</p>
					<input type="text" name="username" placeholder="Username">
					<p>Password</p>
					<input type="password" name="password" placeholder="*****">
					<input type="submit" value="Sign in" >
					<a href="">Forget Password</a>
                    <a href="signup.php">or Signup</a>
				</form>
			
			</div>
			
		<script src="jquery-1.11.1.min.js" type="text/javascript" ></script>
		<script src="javaD.js" type="text/javaScript"></script>
	</body>
</html>


<?php
    session_unset();
    session_destroy();
?>