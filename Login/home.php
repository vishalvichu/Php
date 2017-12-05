<?php session_start();?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<!-- HEAD SECTION -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>PEC Parental Feedback System</title>
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--BOOTSTRAP MAIN STYLES -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--FONTAWESOME MAIN STYLE -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--CUSTOM STYLE -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!--END HEAD SECTION -->
<body>   
     <!-- NAV SECTION -->
     <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PEC</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#header-section">Home</a></li>
                    <li><a href="#about-section">About</a></li>
                    <li><a href="#login-section">Login</a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
     <!-- HEADER SECTION -->
    <div id="header-section">
        <div class="container">
            <div class="row centered">
                <div class="col-md-8 col-md-offset-2">
                    <h1><strong><font color="blue"> Prathyusha Engineering College</font></strong></h1>
                     <br /> <br /> <br />
                    <h2><font color="blue"> Welcome to parents and staffs</font></h2>
                     <br />
                  <a href="#about-section"> <i class="fa fa-angle-double-down fa-5x down-icon" style="color:blue"></i> </a>
                </div>
            </div>
        </div>
    </div> 
    <!--END HEADER SECTION -->
    <!--ABOUT SECTION -->
    <div id="about-section" >
        <div class="container" >
            <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 " data-scrollreveal="enter top and move 100px, wait 0.3s">
                    <h1>About</h1>
                    <h4>
                       -------------------------------------
                    </h4>
                </div>
            </div>        
        </div>
    </div>
    <!-- END ABOUT SECTION -->
    <!--LOGIN SECTION -->
    <div id="login-section">
        <div class="container" >
            <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 " data-scrollreveal="enter top and move 100px, wait 0.3s">
                    <h1>Login</h1>
                    
                </div>
            </div>
            <!-- ./ Main Heading-->
            <div class="row" align="center" >		   
            <form method="post">
                <div class="row">
					<div class="form-group" align="center">
						<input type="text" name="user" class="form-my" required="required" placeholder="Username" style="width:26%">
					</div>
                </div>
                <div class="row">
					<div class="form-group" align="center">
						<input type="password" name="pass" class="form-my" required="required" placeholder="Password" style="width:26%">
					</div>
				</div>
			    <div class="row">
					<div class="form-group" align="center">
						<select class="form-my" style="width:26%" name="role">
							<option value="">--Select role--</option>
							<option value="staff">Staff</option>
							<option value="parent">Parent</option>
							<option value="admin">Admin</option>
							<option value="hod">HOD</option>
						</select>
					</div>
                </div>
                <div class="row">
					<div class="form-group" align="center">
                       <button type="submit" name="login" class="btn btn-primary">Login</button>
					</div>
				</div>
                </form>
                </div>    
        </div>
    </div>
        <!-- ./ Row Content-->
 <?php
  if(isset($_POST['login'])) {
		header("location:result.php");}
   }
?> 
   <!--END LOGIN SECTION -->
    
    
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY LIBRARY -->
    <script src="assets/js/jquery.js"></script>
    <!-- CORE BOOTSTRAP LIBRARY -->
    <script src="assets/js/bootstrap.min.js"></script>
     <!-- SCROLL REVEL LIBRARY FOR SCROLLING ANIMATIONS-->
    <script src="assets/js/scrollReveal.js"></script>
       <!-- CUSTOM SCRIPT-->
    <script src="assets/js/custom.js"></script>
</body>
</html>