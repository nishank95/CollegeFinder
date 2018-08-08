<?php

$coll_id=$_GET['id'];
include('session.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proj_india";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM college_info where cid=$coll_id";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) 
    {
       $cname=$row['college_name'];       
    }

$dbname1 = "proj_users";
$u_name=$login_session;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname1);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
} 

$sql1 ="SELECT * FROM user_login where fname='$u_name'";
$result1 =$conn->query($sql1);

    while($row = $result1->fetch_assoc()) 
    {
       $uid=$row['uid'];
       $uname=$row['username'];
      
    }

$dbname2 = "proj_users";
// Create connectionw
$conn = new mysqli($servername, $username, $password, $dbname2);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql3 = "INSERT INTO wishlist VALUES('','$coll_id','$cname','$uid','$uname',CURRENT_DATE,CURRENT_TIME)";
$result3 = $conn->query($sql3);

header("Location: india.php");

?>
