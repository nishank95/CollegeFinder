<!DOCTYPE html>
<html>
<head>
<title>Reponsive HTML Template</title>
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
       <h1 class="navbar-brand"><a href="index.html">college<span>Finder</span></a></h1>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="india.php">Study India</a></li>
          <?php
include('page_session.php');
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
 echo "<li><a href='login.php'>login</a></li>";

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
  
    <div class="col-md-6" style="background-color: #fff;
    border-radius: 2px;
    position: relative;
    padding-bottom: 20px;
    padding-top: 20px;
    
    left: 25%;">
      <h3 style="margin-bottom:20px;">Register</h3>
      <hr>
      <form role="form" class="contact-form" style="padding-left: 10px;padding-top: 10px;padding-bottom: 10px;padding-right: 10px;" action="submit_details.php" method="POST">
        <div class="form-group col-md-6">
          <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -130px;">Name</p>
          <label class="sr-only" for="exampleInputEmail1">Enter Name</label>
          <input required=""  name="fname" type="text" class="form-control" id="inputName" placeholder="Enter Name" style="width: 170%;height: 38px;">
          <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left:  -130px;">E-mail</p>
          <label class="sr-only" for="exampleInputEmail1">Enter E-mail</label>
          <input required="" name="mail" type="text" class="form-control" id="inputName" placeholder="Enter E-mail" style="width: 170%;height: 38px;">
          <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left:  -90px;">Contact No</p>
          <label class="sr-only" for="exampleInputEmail1">Enter Contact No</label>
          <input required=""  name="number" type="text" class="form-control" id="inputName" placeholder="Enter Contact-No" style="width: 170%;height: 38px;">
          <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left:  -100px;">Username </p>
          <label class="sr-only" for="exampleInputEmail1">Enter Username</label>
          <input required="" name="uname" type="text" class="form-control" id="inputName" placeholder="Enter Username" style="width: 170%;height: 38px;">
          <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left:  -100px;">Password </p>
          <label class="sr-only" for="exampleInputEmail1">Enter Password</label>
          <input required="" name="pass" type="password" class="form-control" id="inputName" placeholder="********" style="width: 170%;height: 38px;">
          <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left:  -20px;">Confirm Password</p>
          <label class="sr-only" for="exampleInputEmail1">Enter Password</label>
          <input required="" type="password" class="form-control" id="inputName" placeholder="********" style="width: 170%;height: 38px;">
        </div>
        <div style="margin-top: 690px;margin-left: 320px;margin-bottom: 20px;">
          <input type="reset" class="btn btn-default btn-md" style="background-color: #77beec;border-color: #77beec;border-bottom-color: #589ecb;color: #fff;margin-top: 0px;margin-left: -380px;">
          <input type="submit"  class="btn btn-default btn-md" style="background-color: #77beec;border-color: #77beec;border-bottom-color: #589ecb;color: #fff;margin-left: 10px;margin-top: 0px;" value="submit">       </div>
      </form>
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