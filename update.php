<?php
session_start();
if(!isset($_SESSION['login'])){
 header("location:login.php");
 
}
$id=$_GET['id'];
 $name=$_POST["name"];
  $age=$_POST["age"];
 $roll=$_POST["roll"];

 $conn=mysqli_connect("localhost","root","","std_info");
 $sql="UPDATE students SET name='$name',age='$age',roll='$roll' WHERE id=$id";
 mysqli_query($conn,$sql);
header("location:show.php?id=".$id);
?>