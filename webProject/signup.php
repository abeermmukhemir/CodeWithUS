<?php
// Start the session
    session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Transparent Login Form</title>
		<meta charset="utf_8">
		<link rel="StyleSheet" href="css/bootstrap.css" type="text/CSS">
		<link rel="StyleSheet" href="signupStyle.css" type="text/CSS">
	
	</head>
	
	<body>
		
			<section class="wave"></section>
			

			<div class="loginBox" >
				<h2>Create Account Here</h2>
				<form action="php/signupcheck.php" method="POST">

                  <p>
                      <?php
                      if( (! isSet($_SESSION["user"])) && isSet($_SESSION["errormsg"]) ){
                          echo $_SESSION["errormsg"];
                          if($_SESSION["errormsg"]==="this username is already exists , if you registered you can sign in " ||  $_SESSION["errormsg"]==="this email is already exists , if you registered you can sign in "  ){
                              echo '<a href="login.php"> here </a>';
                          }
                      }
                      ?>
                  </p>
                    <br>
                    <p>Full Name</p>
					<label for="fullname"></label>
					<input type="text" name="fullname" id="fullname">
                    <p>Usernameame</p>
					<label for="username"></label>
					<input type="text" name="username" id="username">
                    <p>Email</p>
					<label for="email"></label>
					<input type="email" name="email" id="email">
                    <p>Password</p>
					<label for="password"></label>
					<input type="password" name="password" id="password">
					
					<input type="submit" value="Create Account">
					
				</form>
				<div class="bookcover"></div>
				</div>
				
			
			
			
		<script src="js/jquery-1.11.1.min.js" type="text/javaScript"></script>
		<script src="js/bootstrap.min.js" type="text/javaScript"></script>	
		<script src="javaD.js" type="text/javaScript"></script>
	</body>
</html>


<?php
    session_unset();
    session_destroy();
?>