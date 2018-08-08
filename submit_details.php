<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    if(empty($_POST['fname']) || empty($_POST['uname']) || empty($_POST['pass']) || empty($_POST['number']) || empty($_POST['mail']))
    {
      $error="Required details cannot be empty";
    }
    else
    {
      //Initialising database parameters
     $servername = "localhost";
     $username = "id3529688_root";
     $password = "root1234";
     $dbname = "id3529688_proj_users";
 
      
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
      
      $conn=new mysqli($servername,$username,$password,$database);
      
      if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
      }
      
      $sql="INSERT INTO user_login VALUES('','$uname','$pass','$fname')";
      
      $sql1="INSERT INTO user_details VALUES('','$fname','$uname','$pass','$number','$mail')";
      
      $sql1="INSERT INTO recommend_details VALUES('','','','','','')";
      
      $result1 = $conn->query($sql);
      $result2 = $conn->query($sql1);
        
    }
header("Location: login.php");
}