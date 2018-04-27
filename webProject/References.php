<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>References</title>
    <link rel="StyleSheet" href="css/bootstrap.css" type="text/css">
    <link rel="StyleSheet" href="ReferencesStyle.css" type="text/css">
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
            <h2 id="title">< Code With Us /> </h2>

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


<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="booksTitle">
                <div class="bookList">
                <h4>All Books</h4>
                <div> <img src="delete.png" ><a class="linkOfBook">book1</a></div>
                <div> <img src="delete.png" ><a class="linkOfBook">book2</a></div>
                </div>

                <div class="buttons1">
                    <button><img src="add%20book.png"><p>add new book</p></button><br>
                    <input type="text" placeholder="enter the book">

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="linksTitle">
                <div class="linkList">
                <h4>All Links</h4>
                <div> <img src="delete.png" ><a class="link">link1</a></div>
                <div> <img src="delete.png" > <a class="link">link2</a></div>
                </div>

                <div class="buttons2">
                    <button><img src="add%20link.png"><p>add new link</p></button><br>
                    <input type="text" placeholder="enter the link">

                </div>
            </div>
        </div>
    </div>

    <div class="row text-center">
        <button><img src="change.png"><p>Change documentation</p></button>
        <button><img src="download.png"><p>Download documentation</p></button>
    </div>


</div>

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>