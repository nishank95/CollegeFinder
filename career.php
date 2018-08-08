<html><head>
<title>Explore Career's</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet">
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
      window.location.href = "http://localhost/College%20Finder/career_view.php?id=" + id;
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
          <li><a href="india.php">study india</a></li>
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
          
          <li class="active"><a href="career.php">explore career's</a></li>
          <li><a href="contact.php">contact us</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</header>
<section class="main__middle__container">
  <div class="row blue__line">
    <div class="container text-center">
      <h1>Explore Career's</h1>
      <p class="big-paragraph" style="
    text-transform: initial;
    font-size: larger;
">Career Choices Are Life Choices Choose Them Seriously ! Do it Right !!</p>
    </div>
  </div>
  <div class="container">
    <div class="row no_padding nothing no-margin">
      <h3>Careers after Graduation</h3>
      <hr>
      <p>Graduation plays a critical role in shaping ones professional career. After completing graduation, you are supposed to have superior knowledge in a particular stream of education. Graduation provides a base that you can utilize to realize your dreams. While many students find a right way to fulfill their dreams, a majority of them find it difficult to choose the right career option after graduation. The confusion in choosing right career option is natural. You have numerous career options after graduation like Management, Hospitality, Computer, Information Technology etc. Many of them didnt even exist a few years ago. Therefore, you may need to seek guidance and support from experienced counselors in choosing the best career after graduation. </p>
      <p>If you are not liking your subject, job or stream of education and want a change Dont get frustrated. Feel happy about the fact that you have realized your potential and looking to improve your life. Feel confident and read what all options exist after graduation.</p>
      
    </div>
    <div class="row no_padding nothing">
      <div class="col-md-5"> <img src="images/content__images/sales.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
      <div class="col-md-7">
        <h3>Sales and Business Development</h3>
        <hr>
        <p>Sales and Business development is an evergreen career. It will never go out of fashion. In the era of high competition, the demand for business development professionals will only increase. Every company, irrespective of its size and strength, requires sales professionals. Business Development Roles in FMCG/IT/Manufacturing companies are one the most sought after profiles in top B-Schools. Many companies hire graduates for entry level sales profiles. If you are good at interacting with people, you will love this job.</p>
        <p><a role="button" class="btn btn-primary" style="margin-top:10px" id="1001" onclick='function1(this.id)'>Learn more</a></p>
      </div>
    </div>
	
	<div class="row no_padding nothing">
      <div class="col-md-7">
        <h3>Marketing/Advertising/Communication</h3>
        <hr>
        <p>If you are one of those who believe sales and marketing are the same things, please do some research before applying for next marketing executive role. Marketing positions are mainly office jobs. You do research, analysis, conceptualize and implement marketing campaigns, develop strategies, etc. Again this job is most sought after in B-Schools placements. Since this role requires strategic thinking, companies prefer to hire MBAs. However, if you have graduated from a reputed college, you may get an opportunity.</p>
        <p>Depending on your college, and employer, fresh graduates get a salary in the range of INR 15,000-30,000 per month.</p>
        <p><a role="button" class="btn btn-primary" style="margin-top:10px" id="1002" onclick='function1(this.id)'>Learn more</a></p>
      </div>
      <div class="col-md-5"> <img src="images/content__images/man.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
    </div>
	
	<div class="row no_padding nothing">
      <div class="col-md-5"> <img src="images/content__images/cs.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
      <div class="col-md-7">
        <h3>CS/CA/CFA/CWA:</h3>
        <hr>
        <p>If you have done your graduation in commerce stream then you will naturally go for any of these: Company Secretary (CS), Chartered Accountant (CA), Chartered Financial Analyst (CFA), or Costs and Works professional (CWA). Demand for these professionals is always high in any economy. Before choosing a particular course, you must know the difference between these disciplines and what kind of jobs you will be doing after completing them successfully. </p>
        <p>The salary depends on the discipline and communications skills of applicants. However, salaries of most of the professionals in these fields start at INR 40,000 per month.</p>
        <p><a role="button" class="btn btn-primary" style="margin-top:10px" id="1003" onclick='function1(this.id)'> Learn more</a></p>
      </div>
    </div>
	
	<div class="row no_padding nothing">
      <div class="col-md-7">
        <h3>IT Degree/Courses: MCA/Animation/Web Design</h3>
        <hr>
        <p>IT courses are not restricted to just science graduates. Anyone can learn a programming language or can work in IT after doing a professional certificate course or a degree course like MCA. If you have done your graduation in non-mathematics stream (like BA etc.), then you may need to do a short introductory course to be eligible to get into MCA. For example, if you have done Bachelor of Arts and want to pursue MCA from IGNOU, then you need to pass a six-month certification program known as CIC.</p>
        <p><a href="#" role="button" class="btn btn-primary" style="margin-top:10px">Learn more</a></p>
      </div>
      <div class="col-md-5"> <img src="images/content__images/it.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
    </div>
	
	<div class="row no_padding nothing">
      <div class="col-md-5"> <img src="images/content__images/masscomm.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
      <div class="col-md-7">
        <h3>Mass Communication and Journalism:</h3>
        <hr>
        <p>Digital media has opened up a lot of career opportunities for mass communication professionals. With experience, you may become correspondent, reporter, anchor, columnist, editor and radio jockey. You can even start your publishing website and monetize it. You can easily earn Rs 15,000 to Rs 50,000 per month either by working as independent media professional or joining a media company.</p>
        <p><a href="#" role="button" class="btn btn-primary" style="margin-top:10px">Learn more</a></p>
      </div>
    </div>
	
	<div class="row no_padding nothing">
      <div class="col-md-7">
        <h3>Hotel Management</h3>
        <hr>
        <p>Hotel Management provides an excellent opportunity to work with well-known brands in various roles. Post graduation in Hotel Management will help you getting a decent job through campus placement. After graduating in Hotel management, you can also work in catering services, Food technology startups, restaurants, Railways, shipping, corporate organizations, clubs, etc. You can expect a starting salary of INR 10,000 to INR 35,000.</p>
        <p><a href="#" role="button" class="btn btn-primary" style="margin-top:10px">Learn more</a></p>
      </div>
      <div class="col-md-5"> <img src="images/content__images/hotel.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
    </div>
	
	
	<div class="row no_padding nothing">
      <div class="col-md-5"> <img src="images/content__images/air.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
      <div class="col-md-7">
        <h3>Civil Aviation: Air Hostess/Commercial Pilot</h3>
        <hr>
        <p>Commercial pilots and air hostess are dream job profile for many. However, due to the limited requirement of such roles, you will find intense competition in this field. Commercial pilots get a starting salary of INR 1,50,000+ per month while Air Hostesses get INR 50,000+ per month.</p>
        <p><a href="#" role="button" class="btn btn-primary" style="margin-top:10px">Learn more</a></p>
      </div>
    </div>
	
	<div class="row no_padding nothing">
      <div class="col-md-7">
        <h3>Law</h3>
        <hr>
        <p>The law is a highly competitive and evergreen field. You need to do LLB/LLM to become a practicing lawyer. After completing your LLB/LLM, you may also prepare for judicial services exams or join corporate legal firms. Graduates from top institutes also prefer to join LPOs (Legal Process Outsourcing) as it provides a lucrative career opportunity, high compensation, and faster growth. The compensation for fresh law graduates falls in the range of INR 10,000 – 40,000 per month.</p>
        <p><a href="#" role="button" class="btn btn-primary" style="margin-top:10px">Learn more</a></p>
      </div>
      <div class="col-md-5"> <img src="images/content__images/law.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
    </div>
	
	<div class="row no_padding nothing">
      <div class="col-md-5"> <img src="images/content__images/bank.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
      <div class="col-md-7">
        <h3>Banking, Financial Services, and Insurance</h3>
        <hr>
        <p>BFSI sector (Banking, Financial Services, and Insurance) has employed millions of Indians. The industry is witnessing an unprecedented growth and expected to grow in the same fashion in future. If you want to work in Public sector banks, you need to pass entrance tests like SSC and Bank PO exams. ICICI Bank also conducts entrance exams for recruitment of probationary officers.</p>
        <p><a href="#" role="button" class="btn btn-primary" style="margin-top:10px">Learn more</a></p>
      </div>
    </div>
	
	<div class="row no_padding nothing">
      <div class="col-md-7">
        <h3>Library Science</h3>
        <hr>
        <p>Library Science is a multidisciplinary field that includes practices and tools of management, information technology, education and several other areas. You need to have a relevant degree in Library science to be employed in school or college libraries, public and private libraries, and museums, etc. The salary ranges from INR 15,000 to 30,000 per month.</p>
        <p><a href="#" role="button" class="btn btn-primary" style="margin-top:10px">Learn more</a></p>
      </div>
      <div class="col-md-5"> <img src="images/content__images/library.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
    </div>
	
	<div class="row no_padding nothing">
      <div class="col-md-5"> <img src="images/content__images/teach.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
      <div class="col-md-7">
        <h3>Teaching/Education</h3>
        <hr>
        <p>In India, education is considered to be a noble and prestigious profession. While education sector attracts everyone equally, females seem to be more inclined towards this profession. To develop a formal career in teaching in schools, you need to complete B.Ed./Teachers’ Training program.</p>
        <p>The salary in the education sector can vary from INR 15,000 to 1,00,000 lakh depending on your education credentials and field.</p>
      <p><a href="#" role="button" class="btn btn-primary" style="margin-top:10px">Learn more</a></p></div>
    </div>
	
	<div class="row no_padding nothing">
      <div class="col-md-7">
        <h3>Film and TV: Acting/Direction/Production</h3>
        <hr>
        <p>If you want to get into Film and television industry, you need to try for some courses in related fields. You can also try your luck for National School of Drama which is the biggest institute for theater training in India. Alternatively, you can start your channel on YouTube to showcase your talent to the online audience. If you are creative and talented, you will see your channel growing with the help of a little digital marketing efforts. Many YouTube stars are doing better than established film and television actors.</p>
        <p><a href="#" role="button" class="btn btn-primary" style="margin-top:10px">Learn more</a></p>
      </div>
      <div class="col-md-5"> <img src="images/content__images/film.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
    </div>
	
	
	<div class="row no_padding nothing">
      <div class="col-md-5"> <img src="images/content__images/model.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
      <div class="col-md-7">
        <h3>Modelling</h3>
        <hr>
        <p>You don’t need any educational qualification to get into modeling profession. Like other areas, starting early will benefit you in the long run. However, if you intend to do modeling, you should start preparing for it seriously. It is advised that you should continue your education/job while preparing for modeling. Having a stable income and career will help you pass through that struggle period relatively easier. Along with required style, body figure, etc. you must know the art of networking. Talent alone will not help much.  Also while picking up the first assignment, you shouldn’t pay much attention to the fee you are offered.</p>
        <p><a href="#" role="button" class="btn btn-primary" style="margin-top:10px">Learn more</a></p>
      </div>
    </div>
	
	<div class="row no_padding nothing">
      <div class="col-md-7">
        <h3>BPO/KPO</h3>
        <hr>
        <p>If you want to get into Film and television industry, you need to try for some courses in related fields. You can also try your luck for National School of Drama which is the biggest institute for theater training in India. Alternatively, you can start your channel on YouTube to showcase your talent to the online audience. If you are creative and talented, you will see your channel growing with the help of a little digital marketing efforts. Many YouTube stars are doing better than established film and television actors.BPO/KPO sector can accommodate fresh graduates from any stream. If you are good in English language, then you can earn a handsome salary in BPOs.</p>
        <p>Pay Scale – The packages for domestic BPOs start at INR 8,000 per month while the salary for international BPOs ranges from INR 15,000 to 40,000 per month.</p>
        <p><a href="#" role="button" class="btn btn-primary" style="margin-top:10px">Learn more</a></p>
      </div>
      <div class="col-md-5"> <img src="images/content__images/bpo.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
    </div>
    
    <div class="row no_padding nothing">
      <div class="col-md-5"> <img src="images/content__images/write.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
      <div class="col-md-7">
        <h3>Content/Technical writing</h3>
        <hr>
        <p>The Internet is all about content. From news to social media to youtube videos, there is a writer behind everything you see on net. The content may be written in the form or news, social media post for business pages, video script, blog, website content, product description, brochure, advertising copy, user guides or business agreement. All companies be it small or large need professional writers for their content development requirement. Writers are paid handsomely for their good work. You can write in English, Hindi or any other regional languages you are good in. The salary of full time content writer can be anything from INR 15,000-35,000 per month.</p>
        <p><a href="#" role="button" class="btn btn-primary" style="margin-top:10px">Learn more</a></p>
      </div>
    </div>
    
    <div class="row no_padding nothing">
      <div class="col-md-7">
        <h3>Film and TV: Acting/Direction/Production</h3>
        <hr>
        <p>If you want to get into Film and television industry, you need to try for some courses in related fields. You can also try your luck for National School of Drama which is the biggest institute for theater training in India. Alternatively, you can start your channel on YouTube to showcase your talent to the online audience. If you are creative and talented, you will see your channel growing with the help of a little digital marketing efforts. Many YouTube stars are doing better than established film and television actors.</p>
        <p><a href="#" role="button" class="btn btn-primary" style="margin-top:10px">Learn more</a></p>
      </div>
      <div class="col-md-5"> <img src="images/content__images/film.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
    </div>
	
	
	
	
	<div class="row no_padding nothing">
     <div class="col-md-5"> <img src="images/content__images/entreprenur.jpg" alt="image" class="img-responsive no-margin full-width"> </div>
      <div class="col-md-7">
        <h3>Entrepreneurship</h3>
        <hr>
        <p>Nothing is better than Entrepreneurship if you have ability to take risks. You will either succeed or learn great lessons that no job or course will teach you. Many people think of first gaining a work experience or doing MBA and then starting a business so that they will have a better understanding of business management. However, lack of knowledge of business functions and overall management will not hold you because whatever is taught in MBA is available on internet. You search on Google “How to start your business from scratch” and you will get many useful articles. Entrepreneurship requires no prerequisite so if you have planned to start your business anytime in future then the right time is now.</p>
        <p><a href="#" role="button" class="btn btn-primary" style="margin-top:10px">Learn more</a></p>
      </div>
    </div>

<!--
    <div class="row">
      <h3>Single Column</h3>
      <hr>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis suscipit sapien. Morbi bibendum dui et pellentesque molestie. Vivamus tempus eros metus, commodo sollicitudin sapien pellentesque quis. In non purus et nulla ullamcorper convallis. Nam laoreet leo at dolor tincidunt sollicitudin. In a turpis in tellus ullamcorper facilisis. Donec blandit sem sit amet nunc cursus tristique. In cursus vel nisi in ornare. In vehicula aliquet fringilla. Fusce non massa tortor. Curabitur varius fermentum eros a mollis. Aliquam vulputate dui nibh, et consequat tellus malesuada et.
      <div class="dc_clear"></div>
      <br>
      <h3>2 Columns</h3>
      <hr>
<!-- 2 columns start
      <div class="one_half">
        <h4>1/2</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_half column-last">
        <h4>1/2</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="dc_clear"></div>
<!-- 2 columns end 
      
      <h3>3 Columns</h3>
      <hr>
      
      <!-- 3 columns start 
      <div class="one_third">
        <h4>1/3</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_third">
        <h4>1/3</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_third column-last">
        <h4>1/3</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="dc_clear"></div>
      <!-- 3 columns end 
      
      <h3>4 Columns</h3>
      <hr>
      
      <!-- 4 columns start 
      <div class="one_fourth">
        <h4>1/4</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fourth">
        <h4>1/4</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fourth">
        <h4>1/4</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fourth column-last">
        <h4>1/4</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="dc_clear"></div>
      <!-- 4 columns end 
      
      <h3>5 Columns</h3>
      <hr>
      
      <!-- 5 columns start 
      <div class="one_fifth">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fifth">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fifth">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fifth">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fifth column-last">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="dc_clear"></div>
      <!-- 5 columns end 
      
      <h3>6 Columns</h3>
      <hr>
      
      <!-- 6 columns start 
      <div class="one_sixth">
        <h4>1/6</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_sixth">
        <h4>1/6</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_sixth">
        <h4>1/6</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_sixth">
        <h4>1/6</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_sixth">
        <h4>1/6</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_sixth column-last">
        <h4>1/6</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="dc_clear"></div>
      <!-- 6 columns end 
      
      <h3>Left Sidebar + Body</h3>
      <hr>
      
      <!-- left sidebar + body start 
      <div class="one_third">
        <h4>1/3</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="two_third column-last">
        <h4>2/3</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis. Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="dc_clear"></div>
      <!-- left sidebar + body end 
      
      <h3>Right Sidebar + Body</h3>
      <hr>
      
      <!-- right sidebar + body start 
      <div class="two_third">
        <h4>2/3</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis. Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_third column-last">
        <h4>1/3</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="dc_clear"></div>
      <!-- right sidebar + body end 
      
      <h3>2x L/Sidebar + Body</h3>
      <hr>
      
      <!-- 2x L/sidebar + body start 
      <div class="one_fourth">
        <h4>1/4</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fourth">
        <h4>1/4</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="two_fourth column-last">
        <h4>2/4</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus.</p>
      </div>
      <div class="dc_clear"></div>
      <!-- 2x L/sidebar + body end 
      
      <h3>3x L/Sidebar + Body</h3>
      <hr>
      
      <!-- 3x L/sidebar + body start 
      <div class="one_fifth">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fifth">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fifth">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="two_fifth column-last">
        <h4>2/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis. Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis. Donec metus leo, elementum at ultrices ac, dapibus at justo.</p>
      </div>
      
      <div class="dc_clear"></div>
      <!-- 3x L/sidebar + body end 
      
      <br>
      <br>
      <h2>Columns + Padding</h2>
      Column layouts with added edge padding.
      <hr>
      <br>
      <h3>2 Columns (with padding)</h3>
      <hr>
      
      <!-- 2 columns (with padding) start 
      <div class="one_half_pad">
        <h4>1/2</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_half_pad column-last">
        <h4>1/2</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="dc_clear"></div>
      <!-- 2 columns (with padding) end
      
      <h3>3 Columns (with padding)</h3>
      <hr>
      
      <!-- 3 columns (with padding) start 
      <div class="one_third_pad">
        <h4>1/3</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_third_pad">
        <h4>1/3</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_third_pad column-last">
        <h4>1/3</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="dc_clear"></div>
      <!-- 3 columns end 
      
      <h3>4 Columns (with padding)</h3>
      <hr>
      
      <!-- 4 columns (with padding) start 
      <div class="one_fourth_pad">
        <h4>Company</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fourth_pad">
        <h4>Products</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fourth_pad">
        <h4>Services</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fourth_pad column-last">
        <h4>Solutions</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="dc_clear"></div>
      <!-- 4 columns (with padding) end 
      
      <h3>5 Columns (with padding)</h3>
      <hr>
      
      <!-- 5 columns (with padding) start 
      <div class="one_fifth_pad">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fifth_pad">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fifth_pad">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fifth_pad">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fifth_pad column-last">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="dc_clear"></div>
      <!-- 5 columns (with padding) end 
      
      <h3>6 Columns (with padding)</h3>
      <hr>
      <!-- 6 columns (with padding) start 
      <div class="one_sixth_pad">
        <h4>1/6</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_sixth_pad">
        <h4>1/6</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_sixth_pad">
        <h4>1/6</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_sixth_pad">
        <h4>1/6</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_sixth_pad">
        <h4>1/6</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_sixth_pad column-last">
        <h4>1/6</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="dc_clear"></div>
      <!-- 6 columns (with padding) end 
      
      <h3>Left Sidebar + Body (with padding)</h3>
      <hr>
      
      <!-- left sidebar + body (with padding) start 
      <div class="one_third_pad">
        <h4>1/3</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="two_third_pad column-last">
        <h4>2/3</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis. Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="dc_clear"></div>
      <!-- left sidebar + body (with padding) end
      
      <h3>Right Sidebar + Body (with padding)</h3>
      <hr>
      
      <!-- right sidebar + body (with padding) start
      <div class="two_third_pad">
        <h4>2/3</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis. Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_third_pad column-last">
        <h4>1/3</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="dc_clear"></div>
      <!-- left sidebar + body (with padding) end
      
      <h3>2x L/Sidebar + Body (with padding)</h3>
      <hr>
      
      <!-- 2x L/sidebar + body (with padding) start 
      <div class="one_fourth_pad">
        <h4>1/4</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fourth_pad">
        <h4>1/4</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="two_fourth_pad column-last">
        <h4>2/4</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis. Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis. </p>
      </div>
      <div class="dc_clear"></div>
      <!-- 2x L/sidebar + body (with padding) end 
      
      <h3>3x L/Sidebar + Body (with padding)</h3>
      <hr>
      
      <!-- 3x L/sidebar + body (with padding) start 
      <div class="one_fifth_pad">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fifth_pad">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="one_fifth_pad">
        <h4>1/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis</p>
      </div>
      <div class="two_fifth_pad column-last">
        <h4>2/5</h4>
        <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis. Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula, adipiscing porta aliquam et, rutrum nec lectus. Nulla erat risus, molestie non dapibus ac, fermentum vitae felis. Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula</p>
      </div>
           
      <div class="dc_clear"></div>
      <!-- 3x L/sidebar + body (with padding) end --> 
      
      <br class="clear">
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

</body></html>
