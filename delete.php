<?php
session_start();
if(!isset($_SESSION['login'])){
 header("location:login.php");
 
}
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","std_info");
$sql="DELETE  FROM students WHERE id=$id";
if(mysqli_query($conn,$sql)){
  header("location:index.php");
}
else{
  echo "Not Deleted";
}


?>

