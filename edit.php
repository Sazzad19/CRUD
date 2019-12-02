<?php
session_start();
if(!isset($_SESSION['login'])){
 header("location:login.php");
 
}
$id= $_GET['id'];
$conn=mysqli_connect("localhost","root","","std_info");
$sql="SELECT *FROM students WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <br> <br> <br>
   <div class="container">
       <div class="row">
         <div class="col-md-4">
           <a class="btn btn-info" href="index.php">Students List</a>
 

         </div>
         <div class="col-md-8">
          <h2>Edit Student</h2>

            <form action="update.php?id=<?php echo $id  ?>" method="POST">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $row['name'];?>">
  </div>

   <div class="form-group">
    <label for="name">Age:</label>
    <input type="text" class="form-control" name="age" placeholder="Age" value="<?php echo $row['age'];?>">
  </div>

   <div class="form-group">
    <label for="name">Roll:</label>
    <input type="text" class="form-control" name="roll" placeholder="Roll" value="<?php echo $row['roll'];?>">
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
        
         </div>

       </div>

   </div>  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>