<?php
/**
 * Created by PhpStorm.
 * User: Abeer
 * Date: 4/25/2018
 * Time: 10:58 AM
 */

include "DBConnection.php";
include "functions.php";

session_start();

if($_SERVER{'REQUEST_METHOD'}=="POST"){
//    $admins=array("abeer","razan","deena");

//    $username=$_POST{'username'};
    //   $password=$_POST{'password'};
    $oldpassword=$_POST{'oldpassword'};
    $newpassword=$_POST{'newpassword'};


    if($oldpassword==="") {
        $_SESSION["errormsg"] ="please enter your old password";
        echo '<script> window.location="../EditProfile.php" </script>' ;
    }
    elseif($newpassword==="") {
        $_SESSION["errormsg"] ="please enter your new password";
        echo '<script> window.location="../EditProfile.php" </script>' ;
    }
    elseif($oldpassword!==$_SESSION["pass"]){
        $_SESSION["errormsg"] ="you entered incorrect old password";
        echo '<script> window.location="../EditProfile.php" </script>' ;
    }
    else{
        $sql=DBConnect()->prepare("UPDATE user SET user.password=? WHERE user.username=?");
        $sql->bindParam(1,$newpassword);
        $sql->bindParam(2,$_SESSION['user']);
        $sql->execute();

        $_SESSION["pass"] =$newpassword;

        echo '<script> window.location="../main2.php" </script>' ;

    }

}
else{
    //   redirect("http://localhost:63342/signin.html/");
    echo '<script> window.location="../EditProfile.php" </script>' ;
}