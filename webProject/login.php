<?php
    session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Transparent Login Form</title>
		<meta charset="utf_8">
		<link rel="StyleSheet" href="css/bootstrap.css" type="text/CSS">
		<link rel="StyleSheet" href="loginStyle.css" type="text/CSS">
	
	</head>
	
	<body>
		
			<section class="wave"></section>
			
			
			<div class="loginBox" >
				<h2>Log In Here</h2>
				<form action="php/logincheck.php" method="POST">
					<p>
						<?php
                        if( (! isSet($_SESSION["user"])) && isSet($_SESSION["errormsg"]) ){
                            echo $_SESSION["errormsg"];
                        }
                        ?>
					</p>

                    <p>Username</p>
                    <input type="text" name="username" placeholder="Username">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="*****">
					<input type="submit" value="Sign in" >
					<a href="">Forget Password</a>
					<br>
					DON'T HAVE AN ACCOUNT <a href="signup.php" id="flipToSignUp">SIGN UP</a>
				</form>
				<div class="bookcover"></div>
				</div>
				0
			
			
			
		<script src="js/jquery-1.11.1.min.js" type="text/javaScript"></script>
		<script src="js/bootstrap.min.js" type="text/javaScript"></script>	
		<script src="javaD.js" type="text/javaScript"></script>
	</body>
</html>


<?php
    session_unset();
    session_destroy();
?>