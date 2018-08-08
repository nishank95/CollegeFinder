<?php
include('session.php');
$f_name=$login_session;
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

$sql = "SELECT * FROM user_details where fname='$f_name'";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) 
    {
      $uid=$row['uid'];
      $uname=$row['uname'];
    }

//$dbname2 = "id3529688_proj_users";
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname2);
// Check connection
//if ($conn->connect_error) {
 //   die("Connection failed: " . $conn->connect_error);
//} 

$w_count=0;
$sql2 = "SELECT * FROM wishlist where uid=$uid";
$result2 = $conn->query($sql2);
while($row=$result2->fetch_assoc()) 
    {
      $w_count++; 
    }


?>
