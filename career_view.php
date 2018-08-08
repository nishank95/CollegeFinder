<!DOCTYPE html>
<html>
<head>
<title>Reponsive HTML Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/magnific-popup.css">
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
          
  
      
<?php
$prod_id=$_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proj_career_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM career_info where id= $prod_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
      $cname=$row['cname'];
      $overview=$row['overview'];
      $profile=$row['profile']; 
      $opp=$row['opportunities'];
      $process=$row['process']; 
      
    }
 } 
    else 
    {
    echo "0 results";
    }
    
$conn->close();
?>
  

 <section class="main__middle__container">
  <div class="row blue__line">
    <div class="container text-center">
      <h1 style="font-size:-webkit-xxx-large;"><?php echo "$cname"; ?></h1>
      <p style="font-size:-webkit-xx-large;" class="big-paragraph">Big paragraph text under page title.</p>
    </div>
  </div>
  <div class="container">
  
  
  
  
   <!-- /tabbable --> 
          
        <div class="col-md-12">
         
          <ul class="nav nav-tabs" style="margin-top: 25px;">
            <li class="active"><a style="font-size: 20px;font-weight: 700;" href="#A" data-toggle="tab">Overview</a></li>
            <li><a style="font-size: 20px;font-weight: 700;" href="#B" data-toggle="tab">Job Profile</a></li>
            <li><a style="font-size: 20px;font-weight: 700;" href="#C" data-toggle="tab">Employment Opprtunities</a></li>
            <li><a style="font-size: 20px;font-weight: 700;" href="#D" data-toggle="tab">How Do I get There?</a></li>
            <!--<li><a style="font-size: 20px;font-weight: 700;" href="#E" data-toggle="tab">Where To Study</a></li>-->
          </ul>
          <div class="tabbable">
            <div class="tab-content">
              <div class="tab-pane active" id="A">
                
                  <h2>Overview</h2> 
                  <p class="career-para">
                  <?php echo "$overview"; ?>
                  </p>
                  
                  
                  
                  
                  
                  
               </div>
              <div class="tab-pane" id="B">
                 <?php echo "$profile"; ?>
                 
              </div>
              <div class="tab-pane" id="C">
                <?php echo "$opp"; ?>
              </div>
              <div class="tab-pane" id="D">
                <?php echo "$process"; ?>
              </div>
              
            </div>
          </div>
          
        </div>  
    
    <!-- /tabbable --> 
          
    
    
    
    
    
    
    
    
        <div class="dc_clear"></div>
    <br />
    <br />
    <br />
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
<script src="js/jquery.mixitup.min.js"></script> 
<script src="js/jquery.magnific-popup.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        // Start work gallery
        $('#Grid').mixitup();
        });
        $('.gallery').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                  enabled:true
                }
            });
        });
	</script>
</body>
</html>