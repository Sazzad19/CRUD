<?php
session_start();
if(!isset($_SESSION['login'])){
 header("location:login.php");
 
}
 $name=$_POST["name"];
  $age=$_POST["age"];
 $roll=$_POST["roll"];

 $conn=mysqli_connect("localhost","root","","std_info");
 $sql="INSERT INTO students VALUES(NULL,'$name','$age','$roll');";
 if(mysqli_query($conn,$sql)){

    $_SESSION['success']=1;
 	header("location:index.php?");
 }else{
 	 $_SESSION['error']=1;
header("location:insert.php?");
}
?>