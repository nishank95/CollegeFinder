
<!DOCTYPE html>

<?php
include('session.php');
$fname=$login_session;
?>



<html>
<head>
<title>Reponsive HTML Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/magnific-popup.css">
<link href="css/styles.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script language="javascript">
     function function1(id) {
      var id = id;
      //document.writeln(id);
      window.location.href = "http://localhost/College%20Finder/college_view.php?id=" + id;
    }
  </script>
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
          <li class="dropdown active"> 
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi,<?php echo $fname; ?></a>
            <ul class="dropdown-menu">
              <li><a href="profile_demo.php">My Dashboard</a></li>
              <li><a href="profile_details.php">Profile</a></li>
	          <li><a href="my_wishlist.php">My Wishlist</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
          <li><a href="india.php">study india</a></li>
          <li><a href="career.php">explore career's</a></li>
          <li><a href="contact.php">contact us</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</header>
          
  
      
  
<section class="main__middle__container">
  
  <div class="row icons__blocks three__blocks text-center" style="padding: 10px 0 0px;">
    <div class="page-content">
    	<div class="row" style="padding:0px">
		  <div class="col-md-2" style="width: 25%">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav" style="text-align: -webkit-left;">
                    <!-- Main menu -->
                    <li><a href="profile_demo.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="profile_details.php"><i class="glyphicon glyphicon-pencil"></i> Profile</a></li>
                    <li><a href="my_wishlist.php"><i class="glyphicon glyphicon-list"></i>My Wish List</a></li>
                    <!-- <li><a href="#"><i class="glyphicon glyphicon-stats"></i>My Careers</a></li> -->
                    <li class="current"><a href="recommended_list.php"><i class="glyphicon glyphicon-tasks"></i>Recommended Colleges</a></li>
                    <li style="padding-bottom: 10px;"><a href="logout.php">Logout</a></li>
                    
                </ul>
             </div>
		  </div>
<div class="col-md-12" style="width:70%;margin-bottom:90px;margin-top:-20px;">
        <div class="row" style="padding:0px">
        
<?php

function display_results($id,$cname,$city,$fees,$duration,$exams,$deg,$img1,$img2,$img3)
{     
    
echo "<div class='col-md-12' style='background-color: rgba(255, 255, 255, 0.99);box-shadow: rgba(243, 243, 243, 0.48) -6px 7px 13px 0px;margin-right:40px;margin-left: 25px;padding-left: 0px;margin-top: 26px;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;padding-top: 15px;' id='college-list'>";
echo "<div class='col-md-4' style='margin-top: 0px;margin-left: -10;margin-left: -15px;'>
      <img src='images/college_images/$img1' alt='pic' class='img-rounded' style='width:100%;height: 195px;border: rgba(255, 255, 255, 0.14) 7.9px solid;margin: -16px auto -104px auto;'>
    </div>
    <div class='col-md-8' style='padding-left: 0px;'>";
    echo "<h3 style='font-size: 20px;text-align: -webkit-left;margin-bottom: 25px;margin-top: 5px;'>$cname</h3>"; 
    if($deg=="mba")
    {
      echo "<p style='margin-top: 7px;text-align: -webkit-left;'><b style='color:rgb(230, 57, 154);font-size: 18px;'>Duration</b> :$duration</p>
      <p style='margin-top: 7px;text-align: -webkit-left;'><b style='color:rgb(230, 57, 154);font-size: 18px;'>Exams Required</b> :$exams</p>
      <p style='margin-top: 7px;text-align: -webkit-left;'><b style='color:rgb(230, 57, 154);font-size: 18px;'>City</b> :$city</p>
      </div>";  
    echo "<div class='col-md-12'' style='background-color: #222222;height: 56px;width: 946px;margin-top: 0.5px;border-radius: 3px;'>";
    echo "<p>";
    echo "<form style='margin-top: -19px;'>";
    echo "<a name='add-wishlist' class='btn btn-default-mba btn-md-mba' style='margin-top: 5px;margin-left: 600px;margin-right: 10px;' id=$id onclick='function2(this.id)'>Add to WishList</a>";  
    echo "<a class='btn btn-default-mba btn-md-mba' style='margin-top: 5px;margin-left: 5px;margin-right: 10px;' id=$id onclick='function1(this.id)'>View College</a>";  
    
    }
    else
    {
    echo "<p style='margin-top: 7px;text-align: -webkit-left;'><b style='color: #397adc;font-size: 18px;'>Duration</b> :$duration</p>
      <p style='margin-top: 7px;text-align: -webkit-left;'><b style='color: #397adc;font-size: 18px;'>Exams Required</b> :$exams</p>
      <p style='margin-top: 7px;text-align: -webkit-left;'><b style='color: #397adc;font-size: 18px;'>City</b> :$city</p>
      </div>";
    echo "<div class='col-md-12'' style='background-color: #222222;height: 56px;width: 946px;margin-top: 0.5px;border-radius: 3px;'>";
    echo "<p>";
    echo "<form style='margin-top: -19px;'>";
    echo "<a name='add-wishlist' class='btn btn-default btn-md' style='margin-top: 5px;margin-left: 600px;margin-right: 10px;' id=$id onclick='function2(this.id)'>Add to WishList</a>";  
    echo "<a class='btn btn-default btn-md' style='margin-top: 5px;margin-left: 5px;margin-right: 10px;' id=$id onclick='function1(this.id)'>View College</a>";  
    
    }
      
    echo "</form>";
    echo "</p></div></div>";
    
    
  }

//Initialising database parameters
      $servername="localhost";
      $username="id3529688_root";
      $password="root1234";
      $database="id3529688_proj_users";
      
            
      $conn=new mysqli($servername,$username,$password,$database);
      
      if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
      }
      
     $sql = "SELECT * FROM user_details where fname='$fname'";
     $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) 
    {
      $uid=$row['uid'];
    }
  
  $sql1="select * from recommend_details where uid=$uid";
  $result1 = $conn->query($sql1);

 while($row = $result1->fetch_assoc()) 
    {
      $deg=$row['degree'];
      $loc=$row['city'];
      $hsc=$row['hsc_rank'];
      $grad=$row['grad_rank'];
      $gate=$row['gate_rank'];   
}
    
$database2="id3529688_proj_india";
$username2="id3529688_root1";

$conn=new mysqli($servername,$username2,$password,$database2);
      
      if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
      }
      
  $sql2="select n.*,c.* from nishank n,college_info c where n.coll_city like '$loc' and n.degree like '$deg' and n.hsc_rank<=$hsc and n.grad_rank<=$grad and n.gate_rank<=$gate and n.cid=c.cid";

  
  $result2 = $conn->query($sql2);
          
while($row = $result2->fetch_assoc()) 
    {
       $id=$row['cid'];
       $cname=$row['college_name'];
       $city=$row['coll_city']; 
       $exams=$row['exams_req'];
       $duration=$row['coll_duration'];
       $fees=$row['fees'];
       $deg=$row['degree'];
       $img1=$row['img1'];
       $img2=$row['img2'];
       $img3=$row['img3'];
    
      display_results($id,$cname,$city,$fees,$duration,$exams,$deg,$img1,$img2,$img3);
  }
 
  
  
      
   
?>


		  	</div>

		  	
		  </div>
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