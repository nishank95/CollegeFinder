<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    session_start();
    if(empty($_POST['uname']) || empty($_POST['pass']))
    {
      $error="Either Username or Password is empty";
    }
    else
    {
      //Initialising database parameters
      $servername="localhost";
      $username="id3529688_root";
      $password="root1234";
      $database="id3529688_proj_users";
      
      //Getting form parameters
      $uname=$_POST['uname'];
      $pass=$_POST['pass'];
      
      // To protect MySQL injection for Security purpose
      $uname= stripslashes($uname);
      $pass= stripslashes($pass);
      
      
      $conn=new mysqli($servername,$username,$password,$database);
    
      if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
      }
      
      $sql="SELECT * FROM user_login where uname='$uname' AND pass='$pass'";
      $result =$conn->query($sql);
      
      if($result->num_rows == 1)
      {
      $_SESSION['login_user']=$uname; //Initialising User Session
      header('location: profile_demo.php');
      
      }
      
      else
      {
        echo "User doesnt exists"; 
      }
      
      
      
        
    }
 
}