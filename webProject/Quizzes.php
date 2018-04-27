<?php

    include  __DIR__ ."/php/DBConnection.php";
    include  __DIR__ ."/php/functions.php";

    session_start();
    if( ! isSet($_SESSION['user'])){
        echo '<script> window.location="login.php" </script>' ;
    }
    elseif( ! isSet($_SESSION['lang_name'])){
        echo '<script> window.location="main2.php" </script>' ;
    }
    else{
        echo $_SERVER['PHP_SELF'];
    }

    $sql=DBConnect()->prepare("SELECT * FROM quiz WHERE quiz.lang_name=?");
    $sql->bindParam(1,$_SESSION['lang_name']);
    $sql->execute();
//    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $result = $sql->fetchAll();

    if( ! isSet($_GET['id'])){
        if(isSet( $_SESSION['id'])){
            $_GET['id'] =$_SESSION['id'];
        }
        else{
            $_GET['id'] =$result[0][2];
        }

    }
    $_SESSION['id']=$_GET['id'];





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quizzes</title>
    <link rel="StyleSheet" href="css/bootstrap.css" type="text/css">
    <link rel="StyleSheet" href="QuizzesStyle.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="nav0">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="example-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li  ><a href="Main2.php" class="aa">Home</a></li>
                <li  ><a href="" class="aa">Try It</a></li>
                <li  ><a href="Discussion.php" class="aa">Discussion</a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1">Profile <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li><a href="EditProfile.php">Edit Profile</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                        <li><a href="php/logoutcheck.php">Log out</a></li>
                    </ul>

                </li>


            </ul>


        </div>







        <!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <?php
    $i="0";
    foreach ($result as $raw){
        echo '<a class="delete" id="delete' . $i .'" onclick="' . deletequiz() . '">&times;</a>';
        echo '<a href="Quizzes.php?id=' . $raw[2] .'" id="' . $raw[2] . '">Level ' . $raw[0] . '</a>';

        //   echo '<a href="Quizzes.php?id=' . $raw[2] .'" id="' . $raw[2] . '">Level ' . $raw[0] . '</a><button class="delete" id="delete' . $i .'" onclick="' . deletequiz() . '"><img src="incorrect.png" ></button>';
        $i++;
    }
    ?>
    <button class="addition" id="addquiz"><img src="add.png"></button>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()" class="open">&#9776; Topic</span>



<div class="container" >

    <div class="row text-center "  id="addnqbdiv">
        <div class="col-sm-0 col-md-2 col-lg-2">
            <div ></div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            <button id="addnq">add new question</button>
        </div>
        <div class="col-sm-0 col-md-2 col-lg-2">
            <div></div>
        </div>
    </div>

    <?php
        $result1=array();
        foreach($result as $raw){
            if($raw[2]===$_GET['id']){
                $sql1=DBConnect()->prepare("SELECT * FROM question WHERE question.quiz_id=?");
                $sql1->bindParam(1,$_GET['id']);
                $sql1->execute();
                $result1 = $sql1->fetchAll();
                $k="0";
                foreach($result1 as $question){
                    echo '<div class="row " id="qdiv' . $k .'">
                            <div class="col-sm-0 col-md-2 col-lg-2">
                                <div ></div>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <div class="Quizz">
                                    <div class="questions" style="border: 1px solid black;margin: 3px">
                                        <a href="Quizzes.php?id=' . $raw[2] .'&qid=' . $question[0] .'" onclick="' . deletequestion() . '" class="closingbtn" id="deleteq' . $k .'">&times;</a>
                                        <label for="q1" style="display: none"><img src="correct.png"></label>
                                        <label for="q1" style="display: none"><img src="incorrect.png"></label>
                                        <p id="q1" style="display: inline">' . $question[0] .'</p><br>
                                        <input type="radio" name="answer" id="answer1"><label for="answer1">' . $question[3] .'</label>
                                        <input type="radio" name="answer" id="answer2"><label for="answer2">' . $question[4] .'</label>
                                        <input type="radio" name="answer" id="answer3"><label for="answer3">' . $question[5] .'</label>
                                        <input type="radio" name="answer" id="answer4"><label for="answer4">' . $question[6] .'</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-0 col-md-2 col-lg-2">
                                <div></div>
                            </div>
                        </div>';
                    $k++;
                }
            }
        }
    ?>


    <div class="row " id="newquestion" style="display: none">
        <div class="col-sm-0 col-md-2 col-lg-2">
            <div ></div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="new-q">
                <?php
                    if(isSet($_SESSION['errormsg'])){
                        echo '<p>' . $_SESSION['errormsg'] . '</p>';
                     //   array_pop($_SESSION);
                        }
                ?>
                <form action="php/addnewquestioncheck.php" method="POST">
                    <input type="text" id="question" name="question" placeholder="write question here">
                    <input type="text" id="answer1" name="answer1" placeholder="write answer 1">
                    <input type="text" id="answer2" name="answer2" placeholder="write answer 2">
                    <input type="text" id="answer3" name="answer3" placeholder="write answer 3">
                    <input type="text" id="answer4" name="answer4" placeholder="write answer 4">
                    <input type="text" id="correct" name="correct" placeholder="write the correct solution">
                    <input type="submit" value="send">
                </form>
            </div>
        </div>
        <div class="col-sm-0 col-md-2 col-lg-2">
            <div></div>
        </div>
    </div>

</div>

<?php
    function deletequestion(){
        $sql4=DBConnect()->prepare("DELETE FROM question WHERE quiz_id=? && question.question=?");
        $sql4->bindParam(1,$_GET['id']);
        $sql4->bindParam(2,$_GET['qid']);
        $sql4->execute();
    }
    function deletequiz(){
        $sql4=DBConnect()->prepare("DELETE FROM quiz WHERE id=?");
        $sql4->bindParam(1,$_GET['id']);
        $sql4->execute();
    //    echo '<script> window.location="Quizzes.php" </script>' ;
    }
?>

<?php
    if($_SESSION['type']==="student"){
        for($j=0;$j<count($result);$j++){
            echo '<script>document.getElementById("delete' . $j .'").style.display = "none";</script>';
        }
        for($j=0;$j<count($result1);$j++){
            echo '<script>document.getElementById("deleteq' . $j .'").style.display = "none";</script>';

        }
        echo '<script>document.getElementById("addquiz").style.display = "none";</script>';
        echo '<script>document.getElementById("addnqbdiv").style.display = "none";</script>';

        if(isSet($_SESSION['errormsg'])) {
            echo '<script>document.getElementById("newquestion").style.display = "initial";</script>';
        }

    }
?>

<script> document.getElementById("addnq").onclick=function(){
            document.getElementById("newquestion").style.display="initial";
    } </script>




<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "200px";

    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";

    }
</script>
</body>
</html>


<?php
    if(isSet($_SESSION['errormsg'])){
        array_pop($_SESSION);
}
?>