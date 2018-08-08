<?php
      
      
      $servername="localhost";
      $username="id3529688_root1";
      $password="root1234";
      $database="id3529688_proj_india";
      
            
      $conn=new mysqli($servername,$username,$password,$database);
      
      if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
      }
      
    include("pagination/function.php");

 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 5; //if you want to dispaly 10 records per page then you have to change here
    	$startpoint = ($page * $limit) - $limit;
        $statement = "college_info"; //you have to pass your query over here
$sql = "select * from {$statement} LIMIT {$startpoint} , {$limit}";

$res = $conn->query($sql);




?>