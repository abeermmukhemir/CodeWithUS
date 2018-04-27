<?php

    session_start();
    if( ! isSet($_SESSION['user'])){
        echo '<script> window.location="login.php" </script>' ;
    }
    else{
        echo $_SERVER['PHP_SELF'];
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <link rel="StyleSheet" href="css/bootstrap.css" type="text/CSS">
    <link rel="StyleSheet" href="EditProfileStyle.css" type="text/CSS">
</head>
<body>
    <section class="wave"></section>

    <div class="container0">
        <div class="profile">
            <h2>Edit You'r Profile</h2>
            <form action="php/EditProfilecheck.php" method="POST">
                <p>
                    <?php
                    if( ( isSet($_SESSION["user"])) && isSet($_SESSION["errormsg"]) ){
                        if($_SESSION["errormsg"]==="please enter your fullname"  ||  $_SESSION["errormsg"]==="please enter your email" ){
                            echo $_SESSION["errormsg"];
                            array_pop($_SESSION);
                        }
                    }
                    ?>
                </p>
                <p>Full Name</p>
                <label for="full"></label>
                <input type="text" value="<?php echo $_SESSION['full']; ?>" id="full" name="full">
                <p>Email</p>
                <label for="user_email"></label>
                <input type="email" value="<?php echo $_SESSION['user_email']; ?>" id="user_email" name="user_email">
                <p>Username</p>
                <label for="user"></label>
                <input type="text" value="<?php echo $_SESSION['user']; ?>" id="user" name="user" readonly>

                <input type="submit" value="Edit">

            </form>

        </div>
        <div class="password">
            <h2>Change Password</h2>
            <form action="php/ChangePasswordcheck.php" method="POST">

                <p>
                    <?php
                    if( ( isSet($_SESSION["user"])) &&  isSet($_SESSION["errormsg"]) ){
                        if($_SESSION["errormsg"]==="please enter your old password"  ||  $_SESSION["errormsg"]==="please enter your new password"   || "you entered incorrect old password"   ){
                            echo $_SESSION["errormsg"];
                            array_pop($_SESSION);
                        }
                    }
                    ?>
                </p>

                <p>Old Password</p>
                <label for="oldpassword"></label>
                <input type="password" placeholder="Old Password" id="oldpassword" name="oldpassword">

                <p>New Password</p>
                <label for="newpassword"></label>
                <input type="password" placeholder="New Password" id="newpassword" name="newpassword">

                <input type="submit" value="Change" style="margin-top: 80px">

            </form>
        </div>
        <div class="or"><p>OR</p></div>
    </div>


<script src="js/jquery-1.11.1.min.js" type="text/javaScript"></script>
<script src="js/bootstrap.min.js" type="text/javaScript"></script>
</body>
</html>



<?php

//    session_unset();
 //   session_destroy();

?>