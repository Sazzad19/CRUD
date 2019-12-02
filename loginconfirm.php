<?php

 $email=$_POST["email"];
  $pass=$_POST["password"];
 
 $conn=mysqli_connect("localhost","root","","std_info");
 $sql="SELECT *FROM users WHERE email='$email' AND password='$pass'";
 $result=mysqli_query($conn,$sql);
 $rowcount=mysqli_num_rows($result);
 if($rowcount==1){
 	session_start();
$_SESSION['login']=true;
header("location:index.php");

 }
 else{
 	header("location:login.php?error=1");
 }

?>