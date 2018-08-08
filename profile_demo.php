
<!DOCTYPE html>
<?php
include('wish_process.php');
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
          <li  class="dropdown active"> 
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi,<?php echo $f_name; ?></a>
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
                    <li class="current"><a href="profile_demo.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="profile_details.php"><i class="glyphicon glyphicon-pencil"></i> Profile</a></li>
                    <li><a href="my_wishlist.php"><i class="glyphicon glyphicon-list"></i>My Wish List</a></li>
                    <!-- <li><a href="#"><i class="glyphicon glyphicon-stats"></i>My Careers</a></li> -->
                    <li><a href="recommended_list.php"><i class="glyphicon glyphicon-tasks"></i>Recommended Colleges</a></li>
                    <li style="padding-bottom: 10px;"><a href="logout.php">Logout</a></li>
                    
                </ul>
             </div>
		  </div>
<div class="col-md-10" style="width:70%">
  <div class="row" style="padding:0px;">
    <div class="col-md-6">
      <div class="row" style="padding:0px">
        <div class="col-md-12">
          <div class="content-box-header">
            <div class="panel-title">User</div>
          </div>
          <div class="content-box-large box-with-header">
            <p><img src="images/fr-05.jpg" class="img-circle" width="80"></p>
            <p><b><?php echo strtoupper($login_session); ?></b></p>
            <div class="row" style="padding:0px;">
              <div class="col-md-6">
                <p class="small mt">MEMBER SINCE</p>
                <p>2012</p>
              </div>
              <div class="col-md-6">
                <p class="small mt">COLLEGES LIKED </p>
                <p>4</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="padding:0px">
        <div class="col-md-12">
          <div class="content-box-header">
            <div class="panel-title">Carrers Interested</div>
          </div>
          <div class="content-box-large box-with-header">
            <p><img src="images/icons/wish.png" class="img-circle" width="80"></p>
            <p><b>Zac Snider</b></p>
            <div class="row" style="padding:0px;">
              <div class="col-md-6">
                <p class="small mt">MEMBER SINCE</p>
                <p>2012</p>
              </div>
              <div class="col-md-6">
                <p class="small mt">CAREERS LIKED </p>
                <p>4</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="col-md-6">
      <div class="row" style="padding:0px">
        <div class="col-md-12">
          <div class="content-box-header">
            <div class="panel-title">My WishList</div>
          </div>
          <div class="content-box-large box-with-header">
            <p><img src="images/icons/wishlist.png" class="img-circle" width="80"></p>
            <p><b>Wishlisted Colleges :<?php echo $w_count; ?></b></p>
            <div class="row" style="padding:0px;">
              <div class="col-md-6">
                <p><a href="my_wishlist.php" class="btn btn-default btn-md" style="margin-left: 125px;margin-top: 10px;">VIEW</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="padding:0px">
        <div class="col-md-12">
          <div class="content-box-header">
            <div class="panel-title">Recommended Colleges</div>
          </div>
          <div class="content-box-large box-with-header">
            <p><img src="images/icons/recom.png" class="img-circle" width="80"></p>
            <p><b>Recommended Colleges :2</b></p>
            <div class="row" style="padding:0px;">
              <div class="col-md-6">
                <p><a href="recommended_list.php" class="profile-bt btn btn-default btn-md" style="margin-left: 125px;margin-top: 10px;">VIEW</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      
      
      
      
      
      
      
      
      
      
      
      <div class="row" style="padding:0px">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Description Of User</div>
						
						
		  			</div>
		  			<div class="content-box-large box-with-header" style="font-size: medium;">
			  			Looking Forward For seeking an admisssion in a good college and excelling in my field of interest . 
						<br><br>
					</div>
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