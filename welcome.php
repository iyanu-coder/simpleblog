<?php

include_once"logicprecess.php";

session_start();
if(strlen($_SESSION['uid'])=="")
{
  header('location:logout.php');
} else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assests/welcome.css" rel="stylesheet">
    <link rel="stylesheet" href="boostrap/css/bootstrap.css">
</head>
<body>


<!-- <nav class="navbar navbar-expand-sm navbar-light bg-light shadow mr-4" style="width: 100%;">
		<button>
			<span>&equiv;</span>
		</button>
            <h3>Instagram</h3>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navigation">
		    <span class="font-weight-bold">&equiv;</span>
		</button>
	 	<div class="navbar- navbar-collapse text-uppercase" id="navigation">
		 	<a href="" class="nav-link text-dark">Home</a>
		 	<a href="" class="nav-link text-dark">Categories</a>
		 	<a href="" class="nav-link text-dark">About</a>
		 	<a href="" class="nav-link text-dark">Contact Us</a>
	 	</div>
     <input type="search" class="form-control" placeholder="type something"  style="width: 270px" ><button style="margin-right: 20px;" class="btn btn-primary">Search</button>
     <div class="controls">
       <a href="logout.php" class="btn btn-success" type="submit" name="signin">Logout</a>
     </div>
 	</nav> -->

   <nav class="navbar navbar-expand-sm navbar-light bg-light shadow mr-4 " style="width: 100%">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">&equiv;</span>
            </button>
            <h2 style="font-family: cursive" class="name">Instagram</h2>
            <div style="font-size: 20px" class="collapse navbar-collapse" id="navbarSupportedContent">
     
                    <a class="nav-link text-dark">Home<span class="sr-only">(current)</span></a>
                
                    <a class="nav-link text-dark" >Categories</a>
              
                    <a class="nav-link text-dark" >Contact Us</a>
               
                    <a class="nav-link text-dark" >About Us</a>           
            </div>
                <input type="search" class="form-control" placeholder="type something"  style="width: 270px" ><button style="margin-right: 20px;" class="btn btn-primary">Search</button>
                <div class="controls">
                  <a href="logout.php" class="btn btn-success" type="submit" name="signin">Logout</a>
               </div>

               
    </nav>

  
  
  <form class="form-group" action='' method="POST">
    <fieldset>
      <div id="legend">
        <legend class="" align="center">WELCOME BACK : <?php  echo  $_SESSION['fname'];?></legend>
      </div>
      
      <div class="control-group" align="center">
        <!-- Button -->
        <div class="head" >
                <h2>My Own Version</h2>
              </div>
              <!-- <div class="controls">
                <a href="logout.php" class="btn btn-success" type="submit" name="signin">Logout</a>
              </div> -->
            </div>
            
          </fieldset>
          
        </form>
        
        
        
        <div class="text-center mt-4">
          <a href="logic.php" class="btn btn-outline-dark" >+ Create a new post</a>
        </div>
        
        
        <div class="row">
          <?php foreach ($query as $q) {?>
            <div class="col-4 d-flex justify-content-center align-item-center">
              <div class="card text-light bg-secondary mt-5"> 
                <div class="container" style="width: 18rem;">
                  <h5 class="card-title"><?php echo $q['title']; ?></h5>
                  <p class="card-body"><?php echo $q['content']; ?></p>
                  <a href="view.php?id=<?php echo $q['id'];?> class="btn btn-light">Read more<span class="text-danger">&rarr;</span></a>
                </div>
                <div class="container">
                  <div class="col-12 " >
                <a href="" style="padding:0 40px 0 30px" ><img src="assests/Sendcomment.png" alt=""></a>
                <a href="" style="padding-right: 40px"><img src="assests/ThumbsUp.png" alt=""></a>
                <a href=""><img src="assests/Love.png" alt=""></a>
							</div>

						</div>	
                </div>
				
            </div>
       <?php }?>
       </div>
    </div><br> <br>
   
<?php } ?>