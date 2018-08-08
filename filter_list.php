<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $statement ="college c,college_info i where c.cid=i.cid &&";
  
  if (isset($_POST['city_option']))
  {
      $loc=$_POST['city_option'];
      
    if($loc=="all")
    {
    $statement.=" 1";  
    }
    else
    {
    $statement.=" c.coll_city LIKE '$loc'";  
    }
  }
  if (isset($_POST['degree']))
  {
    $degree=$_POST['degree'];
    $statement.=" && c.degree LIKE '$degree'";
  }

  if (isset($_POST['recog']))
  {
    $rec=$_POST['recog'];
    $statement.=" && c.recog LIKE '%$rec%'"; 
  }
 
   if (isset($_POST['exam']))
  {
     $exam=$_POST['exam'];
     $statement.=" && c.exams_req LIKE '%$exam%'";  
  }
$_SESSION["filter-stmt"]=$statement;
}

$statement=$_SESSION["filter-stmt"];

$servername = "localhost";
$username = "id3529688_root1";
$password = "root1234";
$dbname = "id3529688_proj_india";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

     

   
 
 include("pagination/function.php");

 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 15; //if you want to dispaly 10 records per page then you have to change here
    	$startpoint = ($page * $limit) - $limit;
         //you have to pass your query over here

	$sql = "select c.*,i.* from {$statement} LIMIT {$startpoint} , {$limit}";
     $result = $conn->query($sql);
?>        