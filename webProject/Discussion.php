<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Discussion</title>
    <link rel="StyleSheet" href="css/bootstrap.css" type="text/css">
    <link rel="StyleSheet" href="DiscussionStyle.css" type="text/css">
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
                <li  ><a href="" class="aa">Home</a></li>
                <li  ><a href="" class="aa">Try It</a></li>
                <li  ><a href="" class="aa">Discussion</a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1">Profile <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li><a href="EditProfile.html">Edit Profile</a></li>
                        <li><a href="Contact.html">Contact</a></li>
                        <li><a href="">Log out</a></li>
                    </ul>

                </li>


            </ul>


        </div>
        <!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container" >
    <div class="row text-center" >
        <form>
            <select name="languages" >
                <option value="java">java</option>
                <option value="python">python</option>

            </select>
            <input type="search">
            <button class="DButton">my answer</button>
            <button class="DButton">my question</button>
            <button class="DButton">ask me question</button>
        </form>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="Area">
            <form>
                <input type="text">
                <input type="submit" value="send reply">
            </form>
        </div>
    </div>
</div>
<div class="container">

    <div class="row " >
        <div class="col-sm-0 col-md-2 col-lg-2">
            <div ></div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="disArea">
                <h4>type</h4>
                <a href="">user name</a>
                <p class="question">question text</p>
                <button>show/hide replies</button>

            </div>

            <div class="repliesArea">
                <h4>type</h4>
                <a href="">user name</a>
                <p class="reply">replies</p>
            </div>

            <div class="submitArea">
                <form>
                    <input type="text">
                    <input type="submit" value="send reply">
                </form>
            </div>

        </div>
        <div class="col-sm-0 col-md-2 col-lg-2">
            <div></div>
        </div>
    </div>
</div>
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>