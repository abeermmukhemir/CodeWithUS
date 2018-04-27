<?php

    session_start();
    if( ! isSet($_SESSION['user'])){
        echo '<script> window.location="login.php" </script>' ;
    }
    else{
        echo $_SERVER['PHP_SELF'];
    }


?>



<!DOCTYPE html>

<html >
	<head>
		<title>Code With Us</title>
		<meta charset="utf_8">
		<link rel="StyleSheet" href="css/bootstrap.css" type="text/css">
		<link rel="StyleSheet" href="Main2Style.css" type="text/css">
		<script>
				var index=1;
		
				autoSlide();
				function autoSlide(){
				var i;
					var x=document.getElementsByClassName("slides");
				for(i=0;i<x.length;i++){
						x[i].style.display="none";		
					}
					if(index >x.length){index=1}
					x[index-1].style.display="block";
					index++;
					setTimeout(autoSlide,2000);
				}
		</script>
		
	
	</head>
	
	<body  onload="autoSlide()">
	
	
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="nav">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h2 id="title">< Code With Us /> </h2>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
    
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
		
	<div class="div2">
		<div class="container0">
			
					<img src="ppp.png" class="slides">
					<img src="img2.jpg" class="slides">
					<img src="img3.jpg" class="slides">
					<img src="bb.jpg" class="slides">
					<img src="programmer-1.jpg" class="slides">
					
					
		</div>
	</div>


	<div class="container" style="margin-top: 400px;background: white;width: 100%;height: 2000px">
		<div class="row text-center" >
			<div class="col-sm-12 col-md-4 col-lg-4">
				<div class="langBox" >
					<img src="java2.png" class="logo"><br>
					<h2>Java Language</h2>
                    <?php $_SESSION['lang_name']="Java";
                    ?>
					<p>??Choose Hoow Whould Like to Learn</p>
					<div class="d1"><img src="video.png" ><a href="Tutorials.php">Tutorials</a></br></div>
					<div class="d2"><img src="book2.png" ><a href="References.php">References</a></br></div>
					<div class="d3"><img src="manual2.png" ><a href="ExplanatoryText.php">Explanatory text</a></div>
					<div class="d4"><img src="exam.png" ><a href="Quizzes.php">Quizzes</a></div>

				</div>

				</div>



			<div class="col-sm-12 col-md-4 col-lg-4">
				<div class="langBox" >
					<img src="if_file_c++_36487.png" class="logo"><br>
					<h2>C++ Language</h2>
					<p>??Choose Hoow Whould Like to Learn</p>
					<div class="d1"><img src="video.png" ><a href="">Tutorials</a></br></div>
					<div class="d2"><img src="book2.png" ><a href="">References</a></br></div>
					<div class="d3"><img src="manual2.png" ><a href="">Explanatory text</a></div>
					<div class="d4"><img src="exam.png" ><a href="">Quizzes</a></div>

				</div>

			</div>

			<div class="col-sm-12 col-lg-4">
				<div class="langBox" >
					<img src="if_file_c_36486.png" class="logo"><br>
					<h2>C# Language</h2>
					<p>??Choose Hoow Whould Like to Learn</p>
					<div class="d1"><img src="video.png" ><a href="">Tutorials</a></br></div>
					<div class="d2"><img src="book2.png" ><a href="">References</a></br></div>
					<div class="d3"><img src="manual2.png" ><a href="">Explanatory text</a></div>
					<div class="d4"><img src="exam.png" ><a href="">Quizzes</a></div>

				</div>

			</div>

		</div>

			<div class="row text-center" style="margin-top: 500px">
				<div class="col-sm-12  col-lg-4">
					<div class="langBox" >
						<img src="if_android_1269841.png" class="logo"><br>
						<h2>Android Language</h2>
						<p>??Choose Hoow Whould Like to Learn</p>
						<div class="d1"><img src="video.png" ><a href="">Tutorials</a></br></div>
						<div class="d2"><img src="book2.png" ><a href="">References</a></br></div>
						<div class="d3"><img src="manual2.png" ><a href="">Explanatory text</a></div>
						<div class="d4"><img src="exam.png" ><a href="">Quizzes</a></div>

					</div>

				</div>

				<div class="col-sm-12 col-lg-4">
					<div class="langBox" >
						<img src="if_python_308445.png" class="logo"><br>
						<h2>Python Language</h2>
						<p>??Choose Hoow Whould Like to Learn</p>
						<div class="d1"><img src="video.png" ><a href="">Tutorials</a></br></div>
						<div class="d2"><img src="book2.png" ><a href="">References</a></br></div>
						<div class="d3"><img src="manual2.png" ><a href="">Explanatory text</a></div>
						<div class="d4"><img src="exam.png" ><a href="">Quizzes</a></div>

					</div>

				</div>

				<div class="col-sm-12  col-lg-4">
					<div class="langBox" >
						<img src="if_22_940979.png" class="logo"><br>
						<h2>HTML Language</h2>
						<p>??Choose Hoow Whould Like to Learn</p>
						<div class="d1"><img src="video.png" ><a href="">Tutorials</a></br></div>
						<div class="d2"><img src="book2.png" ><a href="">References</a></br></div>
						<div class="d3"><img src="manual2.png" ><a href="">Explanatory text</a></div>
						<div class="d4"><img src="exam.png" ><a href="">Quizzes</a></div>

					</div>

				</div>
			</div>

				<div class="row text-center" style="margin-top: 500px">
					<div class="col-sm-12  col-lg-4">
						<div class="langBox" >
							<img src="if_social_style_3_css3_341095.png" class="logo"><br>
							<h2>CSS Language</h2>
							<p>??Choose Hoow Whould Like to Learn</p>
							<div class="d1"><img src="video.png" ><a href="">Tutorials</a></br></div>
							<div class="d2"><img src="book2.png" ><a href="">References</a></br></div>
							<div class="d3"><img src="manual2.png" ><a href="">Explanatory text</a></div>
							<div class="d4"><img src="exam.png" ><a href="">Quizzes</a></div>

						</div>

					</div>

					<div class="col-sm-12 col-lg-4">
						<div class="langBox" >
							<img src="if_javascript_308441.png" class="logo"><br>
							<h2>JavaScript Language</h2>
							<p>??Choose Hoow Whould Like to Learn</p>
							<div class="d1"><img src="video.png" ><a href="">Tutorials</a></br></div>
							<div class="d2"><img src="book2.png" ><a href="">References</a></br></div>
							<div class="d3"><img src="manual2.png" ><a href="">Explanatory text</a></div>
							<div class="d4"><img src="exam.png" ><a href="">Quizzes</a></div>

						</div>

					</div>

					<div class="col-sm-12  col-lg-4">
						<div class="langBox" >
							<img src="if_jquery_308442.png" class="logo"><br>
							<h2>JQuery Language</h2>
							<p>??Choose Hoow Whould Like to Learn</p>
							<div class="d1"><img src="video.png" ><a href="">Tutorials</a></br></div>
							<div class="d2"><img src="book2.png" ><a href="">References</a></br></div>
							<div class="d3"><img src="manual2.png" ><a href="">Explanatory text</a></div>
							<div class="d4"><img src="exam.png" ><a href="">Quizzes</a></div>

						</div>

					</div>

				</div>
					<div class="row text-center" style="margin-top: 500px">
						<div class="col-sm-12  col-lg-4">
							<div class="langBox" >
								<img src="if_boostrap_308435.png" class="logo"><br>
								<h2>BootStrap Language</h2>
								<p>??Choose Hoow Whould Like to Learn</p>
								<div class="d1"><img src="video.png" ><a href="">Tutorials</a></br></div>
								<div class="d2"><img src="book2.png" ><a href="">References</a></br></div>
								<div class="d3"><img src="manual2.png" ><a href="">Explanatory text</a></div>
								<div class="d4"><img src="exam.png" ><a href="">Quizzes</a></div>

							</div>

						</div>

						<div class="col-sm-12 col-lg-4">
							<div class="langBox" >
								<img src="if_php_682678.png" class="logo"><br>
								<h2>PHP Language</h2>
								<p>??Choose Hoow Whould Like to Learn</p>
								<div class="d1"><img src="video.png" ><a href="">Tutorials</a></br></div>
								<div class="d2"><img src="book2.png" ><a href="">References</a></br></div>
								<div class="d3"><img src="manual2.png" ><a href="">Explanatory text</a></div>
								<div class="d4"><img src="exam.png" ><a href="">Quizzes</a></div>

							</div>

						</div>

						<div class="col-sm-12 col-md-4 col-lg-4">
							<div class="langBox" >
								<img src="if_accept-database_49574.png" class="logo"><br>
								<h2>MySql Language</h2>
								<p>??Choose Hoow Whould Like to Learn</p>
								<div class="d1"><img src="video.png" ><a href="">Tutorials</a></br></div>
								<div class="d2"><img src="book2.png" ><a href="">References</a></br></div>
								<div class="d3"><img src="manual2.png" ><a href="">Explanatory text</a></div>
								<div class="d4"><img src="exam.png" ><a href="">Quizzes</a></div>

							</div>

						</div>


				</div>




	</div>


	
		<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript">
		var nav=document.getElementById('nav');
				window.onscroll=function(){
					if(window.pageYOffset===0 ){
					nav.style.background="#0F4137";
					}
					else if(window.pageYOffset>0 && window.pageYOffset<570){
					nav.style.background="rgba(0,0,0,.0000000001)";
					nav.style.boxShadow="0px 4px 2px rgba(0,0,0,.0000000001)";
					
					}
					else if(window.pageYOffset>570){
					nav.style.background="#0F4137";
					nav.style.boxShadow="0px 4px 2px #0F4137";
					}
					else{
					nav.style.background="transparent";
					nav.style.boxShadow="none";
					}
					}
					</script>
	</body>

</html>



<?php

  //  session_unset();
  //  session_destroy();

?>