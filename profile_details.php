
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
                    <li class="current"><a href="#"><i class="glyphicon glyphicon-pencil"></i> Profile</a></li>
                    <li><a href="my_wishlist.php"><i class="glyphicon glyphicon-list"></i>My Wish List</a></li>
                   <!-- <li><a href="#"><i class="glyphicon glyphicon-stats"></i>My Careers</a></li> -->
                    <li><a href="recommended_list.php"><i class="glyphicon glyphicon-tasks"></i>Recommended Colleges</a></li>
                    <li style="padding-bottom: 10px;"><a href="logout.php">Logout</a></li>
                    
                </ul>
             </div>
		  </div>
<div class="col-md-10" style="width:70%">
      <div class="row" style="padding:0px">
		  		<div class="col-md-12 panel-warning">
		  			  
                 
<?php
                  
$servername = "localhost";
$username = "id3529688_root";
$password = "root1234";
$dbname = "id3529688_proj_users";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM user_details where fname='$fname'";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) 
    {
      $mail=$row['email'];
      $phone=$row['number'];
      $username=$row['uname'];
      $password=$row['pass'];
      $c_password=$row['pass'];
    }
  
?>	  			  
		  			 <!--Personal Details Of User --> 
		  			  
		  			  <div class="content-box-header panel-heading">
	  					<div class="panel-title ">Personal Details</div>
                      </div>
                      <div class="content-box-large box-with-header" style="font-size: medium;">            				  			
                                <form role="form" class="contact-form" style="padding-left: 10px;padding-top: 10px;padding-bottom: 10px;padding-right: 10px;" action="update_personal_details.php" method="post">
                                    <div class="form-group col-md-6">
                                      <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -328px;margin-bottom: 8px;margin-top: 15px;">Name</p>
                                      <label class="sr-only" for="exampleInputEmail1">Enter Name</label>
                                      <input required="" name="fname" type="text" class="form-control" id="inputName" placeholder="Enter Name" style="height: 38px;width:150%;" value="<?php echo $fname; ?>">
                                      <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -328px;margin-bottom: 8px;margin-top: 15px;">E-mail</p>
                                      <label class="sr-only" for="exampleInputEmail1">Enter E-mail</label>
                                      <input required="" name="mail" type="text" class="form-control" id="inputName" placeholder="Enter E-mail" style="width: 150%;height: 38px;" value="<?php echo $mail; ?>">
                                      <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -289px;margin-bottom: 8px;margin-top: 15px;" >Contact No</p>
                                      <label class="sr-only" for="exampleInputEmail1">Enter Contact No</label>
                                      <input required="" name="number" type="text" class="form-control" id="inputName" placeholder="Enter Contact-No" style="width: 150%;height: 38px;" value="<?php echo $phone; ?>">
                                      <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -303px;margin-bottom: 8px;margin-top: 15px;">Username </p>
                                      <label class="sr-only" for="exampleInputEmail1">Enter Username</label>
                                      <input required="" name="uname" type="text" class="form-control" id="inputName" placeholder="Enter Username" style="width: 150%;height: 38px;" value="<?php echo $username; ?>">
                                      <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -305px;margin-bottom: 8px;margin-top: 15px;">Password </p>
                                      <label class="sr-only" for="exampleInputEmail1">Enter Password</label>
                                      <input required="" name="pass" type="password" class="form-control" id="inputName" placeholder="********" style="width: 150%;height: 38px;" value="<?php echo $password; ?>">
                                      <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -227px;margin-bottom: 8px;margin-top: 15px;">Confirm Password</p>
                                      <label class="sr-only" for="exampleInputEmail1">Enter Password</label>
                                      <input required="" type="password" class="form-control" id="inputName" placeholder="********" style="width: 150%;height: 38px;" value="<?php echo $c_password; ?>">
                                      </div>  
                                      <div style="margin-top: 590px;margin-left: -20px;margin-bottom: 20px;">
                                        <input type="submit" class="btn btn-default btn-md" style="font-size:18px;font-weight:800px;background-color: #77beec;border-color: #77beec;border-bottom-color: #589ecb;color: #fff;margin-left: 10px;margin-bottom: -78px;margin-top: -84px;width:100%;" value="Update Details">
                                      </div>
                                    </form>
               
                      </div>
                     
                     <!--Personal Details Of User -->
                     
                     <!--Academic Details Of User --> 
		  			  
		  			  <div class="content-box-header panel-heading">
	  					<div class="panel-title ">Academic Details</div>
                      </div>
                      <div class="content-box-large box-with-header" style="font-size: medium;">            				  			
                                <form role="form" class="contact-form" style="padding-left: 10px;padding-top: 10px;padding-bottom: 10px;padding-right: 10px;" action="update_acad_details.php" method="POST">
                                    <div class="form-group col-md-6">
                                      <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -165px;margin-bottom: 8px;margin-top: 15px;">Enter Preferred Degree</p>
                                     <input type="radio" value="mba" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -300px;" name="degree_option"> 
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">MBA</span>
                                      <br>
                                      <input type="radio" value="mtech" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -280px;" name="degree_option"> 
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">M-Tech</span>
                                     <br>
                                      
                                      <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -147px;margin-bottom: 8px;margin-top: 15px;">Enter Location Preference</p><br>
                                      <select style="width: 65%;height: 30px;font-size: 19px;margin-left:-120px;border-radius: 3px;" name="city_option">
                                        
                                        <option value="mumbai">Mumbai</option>
                                        <option value="pune">Pune</option>
                                        <option value="kolkata">kolkata</option>
                                        <option value="chennai">Chennai</option>
                                        <option value="hyderabad">Hyderabad</option>
                                        <option value="delhi">Delhi</option>
                                        <option value="bangalore">Bangalore</option>
                                        <option value="indore">Indore</option>
                                      </select>
                                      <br>
                                      
                                      <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -165px;margin-bottom: 8px;margin-top: 15px;">Select 12th Marks Range:</p>
                                      <input type="radio" value="1" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -207px;" name="hsc_marks"> 
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">Less than 50%</span>
                                      <br>
                                      <input type="radio" value="2" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -251px;" name="hsc_marks"> 
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">50%-60%</span>
                                      <br>
                                      <input type="radio" value="3" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -248px;" name="hsc_marks">
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">60%-75%</span>
                                      <br>
                                      <input type="radio" value="4" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -264px;" name="hsc_marks">
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">75-90%</span>
                                      <br>
                                      <input type="radio" value="5" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -232px;" name="hsc_marks">
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">Above 90%</span>
                                      <br>
                                      
                                     
                                    
                                      <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -165px;margin-bottom: 8px;margin-top: 15px;">Select Grad Marks Range:</p>
                                      <input type="radio" value="1" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -251px;" name="grad_marks"> 
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">35%-50%</span>
                                      <br>
                                      <input type="radio" value="2" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -251px;" name="grad_marks"> 
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">50%-60%</span>
                                      <br>
                                      <input type="radio" value="3" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -251px;" name="grad_marks">
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">60%-70%</span>
                                      <br>
                                      <input type="radio" value="4" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -251px;" name="grad_marks">
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">70%-80%</span>
                                      <br>
                                      <input type="radio" value="5" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -236px;" name="grad_marks">
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">Above 80%</span>
                                      <br>
                                      
                                     
                                        
                               <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -56px;margin-bottom: 8px;margin-top: 15px;">Select Gate Marks Range:<i style="font-weight:300;">(* out of 100)</i></p>
                                      <input type="radio" value="1" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -280px;" name="ggrad_marks"> 
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">25-40</span>
                                      <br>
                                      <input type="radio" value="2" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -280px;" name="gate_marks"> 
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">40-55</span>
                                      <br>
                                      <input type="radio" value="3" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -280px;" name="gate_marks">
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">55-70</span>
                                      <br>
                                      <input type="radio" value="4" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -280px;" name="gate_marks">
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">70-80</span>
                                      <br>
                                      <input type="radio" value="5" style="width: 25px;height: 18px;padding-left: 10px;margin-left: -250px;" name="gate_marks">
                                      <span style="font-size: 18px;font-weight: 500;color: #222222;margin-top: 0px;left:20px;">Above 80</span>
                                      <br>
                                        
                                      <br><br>    
                                      
                                      
                                      </div>  
                                      <div style="margin-top: 590px;margin-left: -20px;margin-bottom: 20px;">
                                        <input type="submit" class="btn btn-default btn-md" style="font-size:18px;font-weight:800px;background-color: #77beec;border-color: #77beec;border-bottom-color: #589ecb;color: #fff;margin-left: 10px;margin-bottom: -78px;margin-top: -84px;width:100%;" value="Update Details">
                                      </div>
                                    </form>
               
                      </div>
                     
                     <!--Academic Details Of User -->

                     
	  	       </div>	
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