<?php
session_start();
if(!isset($_SESSION['username'])) // If session is not set then redirect to Login Page
{
    header("Location:login/index.php");  
    echo "No session";
}
  //  header('Location: login/index.php');
//   session_start();


$user=$_SESSION["username"];
$type=$_SESSION["type"];

echo $user . $type; 


?>