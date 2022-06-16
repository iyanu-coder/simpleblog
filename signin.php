<?php
session_start();
// include Function  file
include_once('function.php');
// Object creation
$usercredentials=new DB_con();
if(isset($_POST['signin']))
{
// Posted Values
$uname=$_POST['username'];
$pasword=md5($_POST['password']);
//Function Calling
$ret=$usercredentials->signin($uname,$pasword);
$num=mysqli_fetch_array($ret);
if($num>0)
{
  $_SESSION['uid']=$num['id'];
  $_SESSION['fname']=$num['FullName'];
// For success
echo "<script>window.location.href='welcome.php'</script>";
}
else
{
// Message for unsuccessfull login
echo "<script>alert('Invalid details. Please try again');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="assests/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="boostrap/css/bootstrap.css">
</head>
<body style="background-color: grey">
  <div class="container col-4" style="background-color: white; border-radius: 5px;">
  <div class="text-center text-dark">
              <h3 style="text-align: center">Instagram</h3>
        </div>
      <div class="row">
        <form action='' method="POST" style="width: 90%; margin: auto">
          
        <div class="form-group">
              <!-- Fullname -->
                <input type="text" id="username" name="username" placeholder="Username" class="form-control" required="true">
            </div>
        
        
            <div class="form-group">
              <!-- Password-->
                <input type="password" id="password" name="password" placeholder="Password" class="form-control" required="true">
            </div>
         
        
         
            <div class="form-group">
              <!-- Button -->
              <div class="controls">
                <button class="btn btn-primary btn-block" type="submit" name="signin">Sign In</button>
              </div>
            </div>
        
         <div class="control-group">
              <!-- Button -->
              <div class="controls">
              Not Registered yet? <a href="index.php">Register Here</a>
              </div>
            </div>
        
        
        </form>
      </div>
  </div>
<script type="text/javascript">

</script>
</body>
</html>
