<?php
/**
 * Created by PhpStorm.
 * User: Abeer
 * Date: 4/24/2018
 * Time: 4:19 PM
 */

include "DBConnection.php";
include "functions.php";

session_start();

if($_SERVER{'REQUEST_METHOD'}=="POST"){
//    $admins=array("abeer","razan","deena");

    $username=$_POST{'username'};
    $password=$_POST{'password'};


    if($username==="") {
        $_SESSION["errormsg"] ="please enter your username";
        echo '<script> window.location="../login.php" </script>' ;
    }
    elseif($password==="") {
        $_SESSION["errormsg"] ="please enter your password";
        echo '<script> window.location="../login.php" </script>' ;
    }
    else{
        $sql=DBConnect()->prepare("SELECT * FROM user WHERE user.username=?");
        $sql->bindParam(1,$username);
        $sql->execute();
    //    $sql->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sql->fetchAll();

        if ($sql->rowCount()===1) {
            if($result[0][3]===$password){

                $_SESSION['full']=$result[0][0];
                $_SESSION['user']=$result[0][1];
                $_SESSION['user_email']=$result[0][2];
                $_SESSION['pass']=$result[0][3];
                $_SESSION['type']=$result[0][4];

                echo '<script> window.location="../main2.php" </script>' ;
            }
            else{
                $_SESSION["errormsg"] ="Incorrect password, please try again ";
                echo '<script> window.location="../login.php" </script>' ;
            }

        }
        else{
            $_SESSION["errormsg"] ="Incorrect username, please try again ";
            echo '<script> window.location="../login.php" </script>' ;
        }
    }

}
else{
    //   redirect("http://localhost:63342/signin.html/");
    echo '<script> window.location="../login.php" </script>' ;
}