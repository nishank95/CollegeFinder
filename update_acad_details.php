<?php
include('session.php');
$fname=$login_session;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
//Getting form parameters
      $deg=$_POST['degree_option'];
      $loc=$_POST['city_option'];
      $hsc=$_POST['hsc_marks'];
      $grad=$_POST['grad_marks'];
      $gate=$_POST['gate_marks'];
      
//Initialising database parameters
      $servername="localhost";
      $username="root";
      $password="";
      $database="proj_users";
      
            
      $conn=new mysqli($servername,$username,$password,$database);
      
      if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
      }
      
     $sql = "SELECT * FROM user_details where fname='$fname'";
     $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) 
    {
      $uid=$row['uid'];
    }
  
 if($deg=="mba")
 {
  $sql1="update recommend_details set degree='$deg',city='$loc',hsc_rank=$hsc,grad_rank=$grad,gate_rank=0,cat_rank=$gate where uid=$uid";   
 }
  
  else
  {
  $sql1="update recommend_details set degree='$deg',city='$loc',hsc_rank=$hsc,grad_rank=$grad,gate_rank=$gate,cat_rank=0 where uid=$uid";    
  }
  
  $result1 = $conn->query($sql1);
  header("Location: recommended_list.php");     
    }
?>