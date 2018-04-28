<?php
/**
 * Created by PhpStorm.
 * User: Abeer
 * Date: 4/27/2018
 * Time: 10:23 PM
 */



include  "DBConnection.php";
include  "functions.php";

session_start();

if($_SERVER['REQUEST_METHOD']==="POST"){
    if($_POST['level']===""){
        $_SESSION['errormsg']="level field is required";
        echo '<script> window.location="../Quizzes.php" </script>' ;;
    }
    else{
        $sql4=DBConnect()->prepare("INSERT INTO quiz (quiz.level,quiz.lang_name) VALUES (?,?)");
        $sql4->bindParam(1,$_POST['level']);
        $sql4->bindParam(2,$_SESSION['lang_name']);
        $sql4->execute();
        echo '<script> window.location="../Quizzes.php" </script>' ;
    }
}
else{
    echo '<script> window.location="../Quizzes.php" </script>' ;;

}