<!DOCTYPE html>
<html>
<head>
<title>Contact US</title>
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
          <li class="active"><a href="contact.php">contact us</a></li>
         
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</header>

<section class="main__middle__container">
  <div class="row blue__line__contact">
    <div class="container text-center">
      <h1 class="contact-header">Contact Us</h1>
      <p class="big-paragraph">We would Like to hear opinions From You</p>
    </div>
  </div>
  <section class="contact-us">
    <div class="container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.27780274829!2d72.87699285615096!3d19.05151968706223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd2376785df725550!2sPVPPCOE+%7C+Padmabhushan+Vasantdada+Patil+Pratishthan&#39;s+College+of+Engineering!5e0!3m2!1sen!2sin!4v1486920506889" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="row">
        <div class="col-md-8">
          <h3>Send us a message</h3>
          <hr>
          <p>Our friendly customer service representatives are committed to answering all your questions and meeting any need you may have. We would love to hear from you! Please fill out the form below so we may assist you.</p>
          <br />
          <form role="form" class="contact-form" action="send.php">
            <div class="form-group col-md-6">
              <label class="sr-only" for="exampleInputEmail1">Your Name: *</label>
              <input required type="text" class="form-control" id="inputName" placeholder="Your Name: *">
            </div>
            <div class="form-group col-md-6">
              <label class="sr-only" for="exampleInputEmail1">Email: *</label>
              <input required type="email" class="form-control" id="inputEmail1" placeholder="Email: *">
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail1">Subject:</label>
              <input type="text" class="form-control" id="inputName" placeholder="Subject:">
            </div>
            <div class="form-group">
              <textarea required class="form-control" rows="5" placeholder="Message: *"></textarea>
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-md-4">
          <h3>Get in touch with us</h3>
          <hr>
          <p>We strive to deliver a level of service that exceeds the expectations of our customers. <br />
          <br />
          If you have any questions about our products or services, please do not hesitate to contact us. We have friendly, knowledgeable representatives available seven days a week to assist you.</p>
          <p class="black-text"><span class="orange">Address:</span> PVPPCOE,Sion,Chunnabhatti,Mumbai</p>
          <p class="black-text"><span class="orange">Telephone:</span>(+91) 123-4567</p>
          <p class="black-text"><span class="orange">Fax:</span> (+91) 123-4567</p>
           </div>
      </div>
    </div>
  </section>
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
