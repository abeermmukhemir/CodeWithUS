<?php
/**
 * Created by PhpStorm.
 * User: Abeer
 * Date: 4/25/2018
 * Time: 12:42 AM
 */


include "DBConnection.php";
include "functions.php";

session_start();

if($_SERVER{'REQUEST_METHOD'}=="POST"){
//    $admins=array("abeer","razan","deena");

//    $username=$_POST{'username'};
 //   $password=$_POST{'password'};
    $fullname=$_POST{'full'};
    $email=$_POST{'user_email'};


    if($fullname==="") {
        $_SESSION["errormsg"] ="please enter your fullname";
        echo '<script> window.location="../EditProfile.php" </script>' ;
    }
    elseif($email==="") {
        $_SESSION["errormsg"] ="please enter your email";
        echo '<script> window.location="../EditProfile.php" </script>' ;
    }
    else{
        $sql=DBConnect()->prepare("UPDATE user SET user.fullname=?, user.email=? WHERE user.username=?");
        $sql->bindParam(1,$fullname);
        $sql->bindParam(2,$email);
        $sql->bindParam(3,$_SESSION['user']);
        $sql->execute();

        $_SESSION["full"] =$fullname;
        $_SESSION["user_email"] =$email;

       echo '<script> window.location="../main2.php" </script>' ;

    }

}
else{
    //   redirect("http://localhost:63342/signin.html/");
    echo '<script> window.location="../EditProfile.php" </script>' ;
}