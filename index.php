<!DOCTYPE html>
<?php
include('page_session.php');
?>
<html><head>
<title>collegeFinder</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link rel="icon" type="image/ico" href="favicon.ico" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css">
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
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="india.php">Study India</a></li>
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

<section class="slider">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      
       <div class="item active"> <img data-src="images/slider/home1.jpg" alt="Third slide" src="images/slider/home1.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>Find a college that's Right for You in India</h1>
            <p>Confused about which College to choose? Know which College you can apply for!</p>
            <p><a class="btn btn-default btn-lg" href="india.php" role="button">get started</a></p>
          </div>
        </div>
      </div>
       
      
      
      <div class="item"> <img data-src="images/slider/career-header.jpg" alt="Second slide" src="images/slider/career-header.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>Explore New Career and Opportunities  </h1>
            <p>Confused about which career to choose? Know which course you want to do but dont know which college would be the best?</p>
            <p><a class="btn btn-default btn-lg" href="career.php" role="button">get started</a></p>
          </div>
        </div>
      </div>
      
      
      
      
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon carousel-control-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon carousel-control-right"></span></a> </div>
</section>
<!--end of slider section-->

 <section class="main__middle__container">
  <div class="row text-center no-margin">
    <div class="container">
      <h1 class="page_title">About Us</h1>
      <p class="big-paragraph" style="font-size: 16px;">We work over the application to provide the college details as effectively as possible.</p>
      <p class="small-paragraph" style="font-size: 23px;">This is a Web-application which makes the college finding process much simpler and faster. We collect the information of colleges in a database and provide services to our users to reduce the complexity of the System.</p>
      <p class="relative_btn"><a class="btn btn-default btn-lg" href="#" role="button">read more</a> 
    </p></div>
  </div>
  <div class="row icons__blocks three__blocks text-center">
    <div class="container">
      <h2><span>Services</span></h2>
      <p class="small-paragraph">We basically deal with following services.</p>
      <div class="col-md-4">
        <h3><a href="india.php">Finding College/Universities</a></h3>
        <p class="smaller" style="margin-top: 10px;">We Provide High Collection Of Universities for Higher Studies</p>
        <img src="images/content__images/search.jpg" alt="image" class="img-responsive img-rounded">
        <p>Simplified and User-Friendly College Search Process.</p>
      </div>
      <div class="col-md-4 middle">
        <h3><a href="login.php">Recommending Colleges</a></h3>
        <p class="smaller" style="margin-top: 10px;">Get Recommendation about the Colleges based on your profile.</p>
        <img src="images/content__images/recommend.jpg" alt="image" class="img-responsive img-rounded">
        <p>Just Register on the Website and provide your details to help us find a better college for you. </p>
      </div>
      <div class="col-md-4">
        <h3 style="margin-bottom:40px;"><a href="career.php">Career Guidance</a></h3>
        <p class="smaller" style="margin-top:20px;">There are vast opporunities ahead.So choose your path effectively.</p>
        <img src="images/content__images/career1.jpg" alt="image" style="height:240px" class="img-responsive img-rounded">
        <p>Worried about your decision don't confuse we are here to help you with career choices.</p>
      </div>
    </div>
  </div>
 
  <div class="row no-margin grey-info-block text-center">
    <div class="container">
      <h2><span style="text-transform:none;">What We Do?</span></h2>
      <p class="small-paragraph">Integer vitae libero ac risus egestas placerat.</p>
      <div class="col-md-6">
        <h3>Finding College/Universities</h3>
        <p class="small-paragraph light">We Provide High Collection Of Universities for Higher Studies</p>
        <img src="images/content__images/college.jpg" alt="pic" class="img-rounded">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
        <p><a href="india.php" class="btn btn-default btn-md">Learn more</a></p>
      </div>
      <div class="col-md-6">
        <h3>Career Guidance</h3>
        <p class="small-paragraph light">We give you an overview of the Careers to Opt for.</p>
        <img src="images/content__images/career.jpg" alt="pic" class="img-rounded">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
        <p><a href="career.php" class="btn btn-default btn-md">Learn more</a></p>
      </div>
    </div>
  </div>
</section>

<!-- Register Banner -->
  <div class="text-center three-blocks">
    <div class="container">
      <div class="row">
        <h2 class=""> Register With Us Today !!  </h2>
        <p>You can Shortlist colleges as well as get recommended college lists based on your profile.So Register and enjoy the services for 			free.</p>
          <p><a href="register.php" class="btn btn-default btn-md">Register Now</a></p>
      </div>
    </div>
  </div>
<!-- Register Banner -->







<div class="row no-margin no_padding grey-info-block text-center"> </div>
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
<script type="text/javascript">

$('.carousel').carousel({
  interval: 3500, // in milliseconds
  pause: 'none' // set to 'true' to pause slider on mouse hover
})
</script>


</body></html>
