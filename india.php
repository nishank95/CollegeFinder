<!DOCTYPE html>

<html>
<head>
<title>Study India</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<link href="shortcodes/shortcodes.css" rel="stylesheet">
<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script>
        $(document).ready(function (){
            $("#browse").click(function (){
                $("html, body").animate({ scrollTop: $("#college-list").offset().top}, 2000);
            });
        });
    </script>
    <script language="javascript">
     function function1(id) {
      var id = id;
      //document.writeln(id);
      window.location.href = "https://nishanksamant95.000webhostapp.com/college_view.php?id=" + id;
    }
     function function2(id) {
      var id = id;
       
      //document.writeln(id);
      window.location.href = "https://nishanksamant95.000webhostapp.com/wishlist.php?id=" + id;
    } 
    window.location='#college-list';
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
          <li class="active"><a href="india.php">Study India</a></li>
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

<!-- Header Slider -->
<section class="slider">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active"> <img data-src="images/slider/home1.jpg" alt="First slide" src="images/slider/home1.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>Browse through the Colleges in India for Higher Studies! </h1>
            <p>Find by school name, major, location, and other keywords.</p>
            
          </div>
              <label class="sr-only" for="exampleInputEmail1">Subject:</label>
              <div class="col-md-12" style="position:absolute;top: 370px;width:800px;left:280px;z-index:99999;">
    <form method="POST" action="india.php">
        
    <input type="search" class="form-control" id="inputName" placeholder="Search By College Name,Location,Majors" style="height: 45px;border: 1px solid #ccc;border-radius: 5px;padding: 1px 12px;font-size: 19px;width:100%;margin-bottom:20px;" name="search_query">
            <p align="center"><input type="submit" class="btn btn-default btn-lg" href="#college-list" role="button" value="Search" name="search_q">
            <a class="btn btn-default btn-lg" style="width:250px;" href="#college-list" role="button">Explore Yourself</a></p>
      
    </form>          
      </div>
      </div>
      </div>
      <!--
      <div class="item nex"> <img data-src="images/slider/career-header.jpg" alt="Second slide" src="images/slider/career-header.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>Explore New Career and Opportunities  </h1>
            <p>Confused about which career to choose? Know which course you want to do but don’t know which college would be the best?</p>
            <p><a class="btn btn-default btn-lg" href="#" role="button">get started</a><a class="btn btn-default btn-lg" href="full_width.html" role="button">read more</a></p>
          </div>
          </div>
        </div>
      </div>
      -->
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon carousel-control-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon carousel-control-right"></span></a> </div>
</section>

<!-- Header Slider -->











<!-- Side Pane  Filters -->      

<section class="main__middle__container">
  <div class="container">
    <div class="row nothing">
      <aside class="col-md-4" style="width: 27.2222222222222%;">
                    <h3><span>Popular Colleges</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.</p>
                    <img src="images/content__images/pop_ind.jpg" alt="image">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat utSuspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                    <p><a href="#" role="button" class="btn btn-primary">Learn more</a></p>
        
            <h3><span>Filters</span></h3>
              <div class="col-md-12" style="background-color: rgba(175, 177, 179, 0.1);box-shadow: rgba(57, 57, 57, 0.16) 2px 0px 20px;border:rgba(0, 0, 0, 0.1) 0.5px solid;">
                   <form action="india.php" method="post" name="filter_v">
            <h3 style="font-size: 20px;margin-top:20px;margin-bottom:15px;">Degree</h3>
                            <hr>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 30px;">M-Tech</span>
                            <input type="checkbox" value="mtech" style="width: 25px;position: absolute;height: 18px;padding-left: 10px;right:110px;" name="degree">
                            <br>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 0px;">MBA</span>
                            <input type="checkbox" value="mba" style="width: 25px;position: absolute;height: 18px;padding-left: 10px;right:110px;" name="degree">
                            <br>        
                    <h3 style="font-size: 20px;margin-top:20px;margin-bottom:15px;">Location</h3>
                            <hr>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 30px; margin-bottom:15px;">Location</span>
                            <select style="width: 65%;height: 30px;font-size: 19px;margin-left:12px;border-radius: 3px;" name="city_option">
                              <option value="all">All</option>
                              <option value="mumbai">Mumbai</option>
                              <option value="pune">Pune</option>
                              <option value="kolkata">kolkata</option>
                              <option value="chennai">Chennai</option>
                              <option value="hyderabad">Hyderabad</option>
                              <option value="delhi">Delhi</option>
                              <option value="bangalore">Bangalore</option>
                              <option value="indore">Indore</option>
                            </select>
                     
                    <h3 style="font-size: 20px;margin-top:30px;margin-bottom:15px;">Exams Accepted</h3>
                            <hr>
                            <p style="font-size: 18px;font-weight: bold;color: rgba(0, 0, 0, 0.88);margin-top: 0px;margin-bottom: 9px;"><u>For MTECH:</u></p>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 0px;">GATE</span>
                            <input type="checkbox" value="GATE" style="width: 25px;position: absolute;height: 18px;padding-left: 10px;right:110px;" name="exam"><br>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 0px;">PGCET</span>
                            <input type="checkbox" value="PGCET" style="width: 25px;position: absolute;height: 18px;padding-left: 10px;right:110px;" name="exam"><br> 
                            <p style="font-size: 18px;font-weight: bold;color: rgba(0, 0, 0, 0.88);margin-top: 0px;margin-bottom: 9px;"><u>For MBA:</u></p>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 0px;">XAT</span>
                            <input type="checkbox" value="XAT" style="width: 25px;position: absolute;height: 18px;padding-left: 10px;right:110px;" name="exam"><br>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 0px;">CAT</span>
                            <input type="checkbox" value="CAT" style="width: 25px;position: absolute;height: 18px;padding-left: 10px;right:110px;" name="exam"><br>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 0px;">MAT</span>
                            <input type="checkbox" value="MAT" style="width: 25px;position: absolute;height: 18px;padding-left: 10px;right:110px;" name="exam"><br>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 0px;">CMAT</span>
                            <input type="checkbox" value="CMAT" style="width: 25px;position: absolute;height: 18px;padding-left: 10px;right:110px;" name="exam"><br>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 0px;">MAH-CET</span>
                            <input type="checkbox" value="MAH-CET" style="width: 25px;position: absolute;height: 18px;padding-left: 10px;right:110px;" name="exam"><br>   
                    <h3 style="font-size: 20px;margin-top:30px;margin-bottom:15px;">Degree Preferance</h3>
                            <hr>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 0px;">AICTE Approved</span>
                            <input type="checkbox" value="AICTE" style="width: 25px;position: absolute;height: 18px;padding-left: 10px;right:110px;" name="recog"><br>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 0px;">DCE Approved</span>
                            <input type="checkbox" value="DCE" style="width: 25px;position:absolute;height: 18px;padding-left: 10px;right:110px;" name="recog"><br>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 0px;">UGC Recognized</span>
                            <input type="checkbox" value="UGC" style="width: 25px;position: absolute;height: 18px;padding-left: 10px;right:110px;" name="recog"><br>
                     <h3 style="font-size: 20px;margin-top:20px;margin-bottom:15px;">Mode</h3>
                            <hr>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 0px;">Part Time</span>
                            <input type="checkbox" value="mba" style="width: 25px;position: absolute;height: 18px;padding-left: 10px;right:110px;"><br>
                            <span style="font-size: 18px;font-weight: 900;color: rgba(34, 34, 34, 0.68);margin-top: 0px;">Full Time</span>
                            <input type="checkbox" value="mba" style="width: 25px;position: absolute;height: 18px;padding-left: 10px;right:110px;"><br>              
                                        
                                              
                                                    
                                                                
                    <p><input type="submit" class="btn btn-default btn-md" style="width: 100%;" name="filter_value" value="Apply Filters"></p>
                      <?php
                     function showall()
                     {
                       $_SESSION["filter-options"]="original";
                       header("Location: india.php");
                       
                     }
                     if(isset($_SESSION["filter-options"]))
                     {
                     echo "<hr><h5 style='text-align:center;'>Or</h5><hr>";
                     echo "<p><input type='submit' class='btn btn-default btn-md' style='width: 100%;margin-top: 0px;' name='show_all' value='Show All Colleges' onclick=show_all();></p>"; 
                     }
                      ?>
              </form>
              </div>
      </aside>
      
<!-- Side Pane  Filters -->      
      
      
      <section class="col-md-8 main-content" id="college-list" style="width:72.7777777777777%;">
        <h2>Explore Colleges In India</h2>
        <p style="font-size: larger;"><strong>Explore the colleges in India based on the filters provided on the left pane by clicking the required options to get the deired colleges below. </strong></p>
        
<?php
       
  function display_results($id,$cname,$city,$fees,$duration,$exams,$deg,$img1,$img2,$img3)
{     
    
echo "<div class='col-md-12' style='background-color: rgba(175, 177, 179, 0.1);box-shadow: rgba(0, 0, 0, 0.29) 2px 0px 20px;margin-right:40px;margin-left: 25px;padding-left: 0px;margin-top: 27px;padding-right: 0px; id='college-list'>";
echo "<div class='col-md-4' style='margin-top: 0px;margin-left: -10;margin-left: -15px;'>
      <img src='images/college_images/$img1' alt='pic' class='img-rounded' style='width:100%;height: 195px;border: rgba(255, 255, 255, 0.14) 7.9px solid;'>
    </div>
    <div class='col-md-8' style='padding-left: 0px;'>";
    echo "<h3 style='font-size: 20px;'>$cname</h3>"; 
    if($deg=="mba")
    {
      echo "<p style='margin-top: 10px;'><b style='color:rgb(230, 57, 154);font-size: 18px;'>Duration</b> :$duration</p>
      <p style='margin-top: 5px;'><b style='color:rgb(230, 57, 154);font-size: 18px;'>Exams Required</b> :$exams</p>
      <p style='margin-top: 5px;'><b style='color:rgb(230, 57, 154);font-size: 18px;'>City</b> :$city</p>
      </div>";  
    echo "<div class='col-md-12'' style='background-color: #222222;height: 56px;margin-top: 0.5px;border-radius: 3px;'>";
    echo "<p>";
    echo "<form style='margin-top: -19px;'>";
    echo "<a name='add-wishlist' class='btn btn-default-mba btn-md-mba' style='margin-top: 5px;margin-left: 485px;margin-right: 10px;' id=$id onclick='function2(this.id)'>Add to WishList</a>";  
    echo "<a class='btn btn-default-mba btn-md-mba' style='margin-top: 5px;margin-left: 5px;margin-right: 10px;' id=$id onclick='function1(this.id)'>View College</a>";  
    
    }
    else
    {
    echo "<p style='margin-top: 10px;'><b style='color: #397adc;font-size: 18px;'>Duration</b> :$duration</p>
      <p style='margin-top: 5px;'><b style='color: #397adc;font-size: 18px;'>Exams Required</b> :$exams</p>
      <p style='margin-top: 5px;'><b style='color: #397adc;font-size: 18px;'>City</b> :$city</p>
      </div>";
    echo "<div class='col-md-12'' style='background-color: #222222;height: 56px;margin-top: 0.5px;border-radius: 3px;'>";
    echo "<p>";
    echo "<form style='margin-top: -19px;'>";
    echo "<a name='add-wishlist' class='btn btn-default btn-md' style='margin-top: 5px;margin-left: 485px;margin-right: 10px;' id=$id onclick='function2(this.id)'>Add to WishList</a>";  
    echo "<a class='btn btn-default btn-md' style='margin-top: 5px;margin-left: 5px;margin-right: 10px;' id=$id onclick='function1(this.id)'>View College</a>";  
    
    }
      
    echo "</form>";
    echo "</p></div></div>";
    
    
  }
        
        
if(isset($_POST["add-wishlist"]))
{
echo '<script language="javascript">';
echo 'alert("College Added To WishList Sucessfully !!")';
echo '</script>';
}
    
        
if(isset($_POST["show_all"])) 
{
  $_SESSION["filter-options"] = "original";
}
        
if(isset($_POST["filter_value"]))
{
   
  $_SESSION["filter-options"] = "filter";
}
        
else if(isset($_POST["search_q"]))
{        
  $_SESSION["filter-options"] = "search";
}  
        
        
        
        
        
if( (isset($_SESSION["filter-options"]) && ($_SESSION["filter-options"]=="original") ) || (!isset($_SESSION["filter-options"])) )
{
include 'college_list.php';
   while($row = $res->fetch_assoc()) 
{
    $id=$row['cid'];
    $cname=$row['college_name'];
    $city=$row['coll_city'];
    $fees=$row['fees'];
    $duration=$row['coll_duration'];
    $exams=$row['exams_req'];
    $deg=$row['degree'];
    $img1=$row['img1'];
    $img2=$row['img2'];
    $img3=$row['img3'];
    display_results($id,$cname,$city,$fees,$duration,$exams,$deg,$img1,$img2,$img3);
      
}  
  echo "<div id='pagingg'>";
  echo pagination($statement,$limit,$page);
  echo "</div>";  
  $conn->close();
}
  
      
if(isset($_SESSION["filter-options"])&&($_SESSION["filter-options"]=="search"))
{
  include 'search_query.php';
 while($row = $res->fetch_assoc()) 
{
    $id=$row['cid'];
    $cname=$row['college_name'];
    $city=$row['coll_city'];
    $fees=$row['fees'];
    $duration=$row['coll_duration'];
    $exams=$row['exams_req']; 
    $deg=$row['degree'];
    $img1=$row['img1'];
    $img2=$row['img2'];
    $img3=$row['img3'];
    display_results($id,$cname,$city,$fees,$duration,$exams,$deg,$img1,$img2,$img3);
      
  }

echo "<div id='pagingg' >";
echo pagination($statement,$limit,$page);
echo "1111";
  echo "</div>";
 $conn->close();
  
}
  
   
if(isset($_SESSION["filter-options"]) && ($_SESSION["filter-options"]=="filter"))
{

 include 'filter_list.php'; 
  echo $statement;
 while($row = $result->fetch_assoc()) 
{
    $id=$row['cid'];
    $cname=$row['college_name'];
    $city=$row['coll_city'];
    $fees=$row['fees'];
    $duration=$row['coll_duration'];
    $exams=$row['exams_req'];
    $deg=$row['degree'];
    $img1=$row['img1'];
    $img2=$row['img2'];
    $img3=$row['img3'];
    display_results($id,$cname,$city,$fees,$duration,$exams,$deg,$img1,$img2,$img3);
      
  }
  echo "<div id='pagingg' >";
  echo pagination($statement,$limit,$page);
  echo "2222";
  echo "</div>"; 
 $conn->close();
  
}
      
        
?>

  
        

      </section>
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