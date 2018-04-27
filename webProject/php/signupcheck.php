<?php
/**
 * Created by PhpStorm.
 * User: Abeer
 * Date: 4/24/2018
 * Time: 4:50 AM
 */

include "DBConnection.php";
include "functions.php";

session_start();

if($_SERVER{'REQUEST_METHOD'}=="POST"){
//    $admins=array("abeer","razan","deena");

    $username=$_POST{'username'};
    $fullname=$_POST{'fullname'};
    $email=$_POST{'email'};
    $password=$_POST{'password'};


    if($fullname==="") {
        $_SESSION["errormsg"] ="please enter your fullname";
        echo '<script> window.location="../signup.php" </script>' ;
    }
    elseif($username==="") {
       $_SESSION["errormsg"] ="please enter your username";
        echo '<script> window.location="../signup.php" </script>' ;
    }
    elseif($email==="") {
        $_SESSION["errormsg"] ="please enter your email";
        echo '<script> window.location="../signup.php" </script>' ;
    }
    elseif($password==="") {
        $_SESSION["errormsg"] ="please enter your password";
       echo '<script> window.location="../signup.php" </script>' ;
    }
    else{
        $sql=DBConnect()->prepare("SELECT * FROM user WHERE user.username=?");
        $sql->bindParam(1,$username);
        $sql->execute();
        $result = $sql->fetchAll();

        $sq=DBConnect()->prepare("SELECT * FROM user WHERE (user.email=?)");
        $sq->bindParam(1,$email);
        $sq->execute();
        $result = $sq->fetchAll();

        if ($sql->rowCount()===0 && $sq->rowCount()===0) {
            $sql1 = DBConnect()->prepare("INSERT INTO user (user.fullname, user.username, user.email, user.password)VALUES (?,?,?,?)");
            $sql1->bindParam(1,$fullname);
            $sql1->bindParam(2,$username);
            $sql1->bindParam(3,$email);
            $sql1->bindParam(4,$password);
            $sql1->execute();


            $_SESSION["user"] =$username;
            $_SESSION["pass"] =$password;

            $result = $sql->fetchAll();
            $_SESSION['full']=$fullname;
            $_SESSION['user']=$username;
            $_SESSION['user_email']=$email;
            $_SESSION['pass']=$password;
            $_SESSION['type']="student";

            echo '<script> window.location="../main2.php" </script>' ;
        }
        elseif($sql->rowCount()>0) {
            $_SESSION["errormsg"] ="this username is already exists , if you registered you can sign in ";
            echo '<script> window.location="../signup.php" </script>' ;
        }
        elseif($sq->rowCount()>0) {
            $_SESSION["errormsg"] ="this email is already exists , if you registered you can sign in ";
            echo '<script> window.location="../signup.php" </script>' ;
        }
    }


}
else{
   //   redirect("http://localhost:63342/signin.html/");
    echo '<script> window.location="../signin.php" </script>' ;
}