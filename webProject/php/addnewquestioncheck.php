<?php
/**
 * Created by PhpStorm.
 * User: Abeer
 * Date: 4/27/2018
 * Time: 4:31 AM
 */

include  "DBConnection.php";
include  "functions.php";

session_start();

if($_SERVER['REQUEST_METHOD']==="POST"){
    if($_POST['question']===""){
        $_SESSION['errormsg']="Empty Question";
        echo '<script> window.location="../Quizzes.php" </script>' ;;
    }
    elseif($_POST['answer1']==="" || $_POST['answer2']==="" || $_POST['answer3']==="" || $_POST['answer4']===""){
        $_SESSION['errormsg']="Empty Answer";
        echo '<script> window.location="../Quizzes.php" </script>' ;
    }
    elseif($_POST['correct']===""){
        $_SESSION['errormsg']="please fill the correct answer";
        echo '<script> window.location="../Quizzes.php" </script>' ;
    }
    elseif($_POST['correct']!==$_POST['answer1']  &&  $_POST['correct']!==$_POST['answer2']  &&  $_POST['correct']!==$_POST['answer3']  &&  $_POST['correct']!==$_POST['answer4'] ){
        $_SESSION['errormsg']="please fill a correct answer";
        echo '<script> window.location="../Quizzes.php" </script>' ;
    }
    else{
        $sql2=DBConnect()->prepare("INSERT INTO `question`(question.question, question.correct_answer, question.quiz_id, question.a1, question.a2, question.a3, question.a4) VALUES (?,?,?,?,?,?,?)");
        $sql2->bindParam(1,$_POST['question']);
        $sql2->bindParam(2,$_POST['correct']);
        $sql2->bindParam(3,$_SESSION['id']);
        $sql2->bindParam(4,$_POST['answer1']);
        $sql2->bindParam(5,$_POST['answer2']);
        $sql2->bindParam(6,$_POST['answer3']);
        $sql2->bindParam(7,$_POST['answer4']);
        $sql2->execute();
        echo '<script> window.location="../Quizzes.php" </script>' ;
    }
}
else{
    echo '<script> window.location="../Quizzes.php" </script>' ;;

}