<?php
//session_start();// Starting Session

//Initialising database parameters
      $servername="localhost";
      $username="id3529688_root";
      $password="root1234";
      $database="id3529688_proj_users";
      
            
      $conn=new mysqli($servername,$username,$password,$database);
      
      if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
      }
      
    
  

// Storing Session
if(isset($_SESSION['login_user']))
{
$user_check=$_SESSION['login_user'];  
// SQL Query To Fetch Complete Information Of User
 $sql = "select * from user_login where uname='$user_check'";
     $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) 
    {
      $f_name=$row['fname'];
    }

}
?>