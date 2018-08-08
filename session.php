<?php
session_start();// Starting Session
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
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



// Storing Session

$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql="select * from user_login where uname='$user_check'";
$result = $conn->query($ses_sql);
//$row = $result->fetch_assoc();
while($row = $result->fetch_assoc()) 
{
$login_session =$row['fname'];
}
if(!isset($login_session)){
$conn->close();    
header('Location: index.php'); // Redirecting To Home Page
}
?>