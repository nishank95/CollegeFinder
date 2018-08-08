<!DOCTYPE html>
<?php
include('page_session.php');

?>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="main__header">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation"> 
      <!-- Brand and toggle get grouped for better mobile display --> 
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-header">
        <h1 class="navbar-brand"><a href="index.html">college<span>finder</span></a></h1>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="india.php">study india</a></li>
          
<?php

if(isset($f_name))
{
  
  echo "<li class='dropdown'>";  
            echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Hi,$f_name </a>";  
             echo "<ul class='dropdown-menu'>";  
               echo "<li><a href='profile_demo.php'>My Dashboard</a></li>";  
               echo "<li><a href='profile_details.php'>Profile</a></li>";  
	           echo "<li><a href='my_wishlist.php'>My Wishlist</a></li>";  
               echo "<li><a href='logout.php'>Logout</a></li>";  
             echo "</ul>";  
           echo "</li>"; 
}
else
{
 echo "<li><a href='register.php'>register</a></li>";

}

?>
          
          <li><a href="career.php">explore career's</a></li>
          <li><a href="contact.php">contact us</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</header>
  <!--end of slider section-->
<section class="main__middle__container">  
  <div class="row icons__blocks three__blocks text-center">
  <div class="container">
    <div class="col-md-6" style="background-color: #fff;
    border-radius: 2px;
    position: relative;
    padding-bottom: 20px;
    padding-top: 20px;
    
    left: 25%;">
      <h3 style="margin-bottom:20px;">Login </h3>
      <hr>
      <form role="form" class="contact-form" style="padding-left: 120px;padding-top: 10px;padding-bottom: 10px;padding-right: 10px;" method="POST" action="check_user.php">
        <div class="form-group col-md-6">
          <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -80px;">Username </p>
          <label class="sr-only" for="exampleInputEmail1">Enter Username</label>
          <input required="" type="text" class="form-control" id="inputName" placeholder="Enter Username" style="width: 170%;height: 38px;" name="uname">
          <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -90px;">Password</p>
          <label class="sr-only" for="exampleInputEmail1">**********</label>
          <input required="" type="password" class="form-control" id="inputName" placeholder="*********" style="width: 170%;height: 38px;" name="pass">
        </div>
        <br>
        <br>
        <br>
        <br>
        <div style="margin-top: 156px;margin-left: 200px;margin-bottom: 20px;">
          <span style="margin-left: -286px;font-size: initial;">New User? <a href="register.php">Register Now</a></span>
          <input type="submit" class="btn btn-default btn-md" style="background-color: #77beec;border-color: #77beec;border-bottom-color: #589ecb;color: #fff;margin-left: 30px;margin-top: 0px;">
        </div>
      </form>
    </div>
   
    
    
    
  </div>
</div>
 
 
 
  
  
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3>About</h3>
        <p>We strive to deliver a level of service that exceeds the expectations of our customers. <br />
          <br />
          If you have any questions about our products or services, please do not hesitate to contact us. We have friendly, knowledgeable representatives available seven days a week to assist you.</p>
      </div>
      <div class="col-md-3">
        <h3>Tweets</h3>
        <p><span>Tweet</span> <a href="#">@nishanks</a><br />
          Great Website truly helpful for finding the right career path and college. </p>
        <p><span>Tweet</span> <a href="#">@anonymous</a><br />
          Awesome job!Truly Helpful!</p>
      </div>
      <div class="col-md-3">
        <h3>Mailing list</h3>
        <p>Subscribe to our mailing list for offers, news updates and more!</p>
        <br />
        <form action="#" method="post" class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">your email:</label>
            <input type="email" class="form-control form-control-lg" id="exampleInputEmail2" placeholder="your email:">
          </div>
          <button type="submit" class="btn btn-primary">subscribe</button>
        </form>
      </div>
      <div class="col-md-3">
        <h3>Social</h3>
        <p>PVPPCOE,Sion<br />
          Chunnabhatti,Mumbai<br />
          India<br />
          <br />
          Phone: (+91) 123-4567<br />
          Fax: (+91) 123-4567<br />
          <br />
        </p>
        <div class="social__icons"> <a href="#" class="socialicon socialicon-twitter"></a> <a href="#" class="socialicon socialicon-facebook"></a> <a href="#" class="socialicon socialicon-google"></a> <a href="#" class="socialicon socialicon-mail"></a> </div>
      </div>
    </div>
    <hr>
    <p class="text-center">&copy; Copyright collegeFinder.com. All Rights Reserved.</p>
  </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>