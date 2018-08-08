<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  
  $search_keyword=$_POST['search_query'];
  $statement="college c,college_info i where c.keyword LIKE '%$search_keyword%' AND c.cid=i.cid"; //you have to pass your query over here
  $_SESSION['filter-search-query']=$statement;    
  echo "true search";
}
else
{
$statement=$_SESSION['filter-search-query'];    
echo "false search";
}


$servername = "localhost";
$username = "id3529688_root1";
$password = "root1234";
$dbname = "id3529688_proj_india";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 

include("pagination/function.php");

 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 10; //if you want to dispaly 10 records per page then you have to change here
    	$startpoint = ($page * $limit) - $limit;
    
     $sql = "select c.*,i.* from {$statement} LIMIT {$startpoint} , {$limit}";
     $res = $conn->query($sql);

?>