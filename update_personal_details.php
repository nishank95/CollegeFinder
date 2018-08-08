<?php

include('session.php');
$fname=$login_session;
//Initialising database parameters
$servername ="localhost";
$username = "root";
$password = "";
$database = "proj_users";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM user_details where fname='$fname'";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) 
    {
      $uid=$row['uid'];
    }


if($_SERVER["REQUEST_METHOD"]=="POST")
{
      
      //Getting form parameters
      $fname=$_POST['fname'];
      $uname=$_POST['uname'];
      $pass=$_POST['pass'];
      $mail=$_POST['mail'];
      $number=$_POST['number'];
      
      // To protect MySQL injection for Security purpose
      $uname= stripslashes($uname);
      $pass= stripslashes($pass);
      $uname= mysql_real_escape_string($uname);
      $pass= mysql_real_escape_string($pass);
      
   
      $sql2="update user_details set fname='$fname',uname='$uname',pass='$pass',number='$number',email='$mail' where uid=$uid";
      
      $sql3="UPDATE user_login SET fname='$fname',uname='$uname',pass='$pass' WHERE uid=$uid";
      
      $result1 = $conn->query($sql2);
      $result2 = $conn->query($sql3);
        
    }

header("Location: profile_details.php");
  
  ?>