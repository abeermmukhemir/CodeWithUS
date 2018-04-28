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


    $sql=DBConnect()->prepare("SELECT * FROM tutorial WHERE tutorial.lang_name=?");
    $sql->bindParam(1,$_SESSION['lang_name']);
    $sql->execute();
    //    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $result = $sql->fetchAll();

    if( ! isSet($_GET['id'])){
        $_GET['id'] =$result[0][0];
    }
    function fun() {
        if(isSet($_GET['id'])){
            $_SESSION['topic']=$_GET['id'];
        }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tutorials</title>
    <link rel="StyleSheet" href="css/bootstrap.css" type="text/css">
    <link rel="StyleSheet" href="TutorialsStyle.css" type="text/css">
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
        foreach ($result as $raw){
            echo '<a class="myanchor" href="Tutorials.php?id=' . $raw[0] . '"  id="' . $raw[0] . '">' . $raw[0] . '</a>';
    }
    ?>

</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()" class="open">&#9776; Topic</span>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

<div class="container" >
    <div class="row " >
        <div class="col-sm-0 col-md-2 col-lg-2">
            <div ></div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="topic">
                <?php
                    echo $_GET['id'];
                ?>
            </div>
        </div>
        <div class="col-sm-0 col-md-2 col-lg-2">
            <div></div>
        </div>
    </div>


    <div class="row "  id="hh">
        <div class="col-sm-0 col-md-2 col-lg-2">
            <div ></div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8" >
            <div class="video" >
                <?php
                    foreach($result as $raw){
                        if($raw[0]===$_GET['id']){
                            echo $raw[2]; break;
                        }
                    }
                ?>
            </div>
       </div>
        <div class="col-sm-0 col-md-2 col-lg-2">
            <div></div>
        </div>
    </div>

    <div class="row " >
        <div class="col-sm-0 col-md-4 col-lg-4">
            <div ></div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="rating">
                <input type="radio" name="star" id="star1"><label for="star1"></label>
                <input type="radio" name="star" id="star2"><label for="star2"></label>
                <input type="radio" name="star" id="star3"><label for="star3"></label>
                <input type="radio" name="star" id="star4"><label for="star4"></label>
                <input type="radio" name="star" id="star5"><label for="star5"></label>

            </div>
        </div>
        <div class="col-sm-0 col-md-4 col-lg-4">
            <div></div>
        </div>
    </div>




</div>

<?php
if($_GET['id'] ==="j1"){
    echo '<script>document.getElementById("hh").style.display = "none";</script>';
}
if($_GET['id'] ===$result[0][0]){
    echo '<script>document.getElementById("hh").style.display = "initially";</script>';
}
?>

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