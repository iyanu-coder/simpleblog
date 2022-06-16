<?php
// include Function  file
include_once('function.php');
// Object creation
$userdata=new DB_con();
if(isset($_POST['submit']))
{
// Posted Values
$fname=$_POST['fullname'];
$uname=$_POST['username'];
$uemail=$_POST['email'];
$pasword=md5($_POST['password']);
//Function Calling
$sql=$userdata->registration($fname,$uname,$uemail,$pasword);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Registration successfull.');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="assests/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="boostrap/css/bootstrap.css">
 <script>
function checkusername(va) {
  $.ajax({
  type: "POST",
  url: "check_availability.php",
  data:'username='+va,
  success: function(data){
  $("#usernameavailblty").html(data);
  }
  });

}
</script>
</head>
<body style="background-color: grey" >
  
  <div class="container col-4" style="background-color: white; border-radius: 5px;">
    <div class="text-center text-dark">
              <h3 style="text-align: center">Instagram</h3>
        </div>
    <div class="row">

      <form action='' method="POST" style="width: 90%; margin: auto" >
          
      <div class="form-group">
            <!-- Fullname -->
              <input type="text" id="username" name="fullname" placeholder="Full name" class="form-control" required="true">
            
          </div>
      
      
          <div class="form-group">
            <!-- Username -->
      <input type="text" id="username" name="username" placeholder="Username" onblur="checkusername(this.value)" class="form-control" required="true">
                <span id="usernameavailblty"></span>
            
          </div>
       
          <div class="form-group">
            <!-- E-mail -->
              <input type="email" id="email" name="email" placeholder="Email" class="form-control" required="true">
            </div>
      
       
          <div class="form-group">
            <!-- Password-->
              <input type="password" id="password" name="password" placeholder="Password" class="form-control" required="true">
            </div>
          </div>
       
      
       
          <div class="form-group">
            <!-- Button -->
              <button class="btn btn-primary btn-block" type="submit" id="submit" name="submit">Register</button>
          </div>
      
       <div class="form-group">
            <div class="controls">
             Already registered <a href="signin.php">Sign In</a>
            </div>
          </div>
      
      </form>
    </div>
</div>
<script type="text/javascript">
</script>
</body>
</html>
