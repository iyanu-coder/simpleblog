<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boostrap/css/bootstrap.css">
    
</head>
<body>
<div class="container">
    
    <form method="POST" action="logicprecess.php">

        <input type="text" name="title" placeholder="Blog title" class="form-control bg-darkb text-primary mt-3 text-center">
        <!-- <input type="file" name="fileToUpload"><br> -->
        <textarea name="content" class="form-control bg-dark text-white my-3" id="" cols="30" rows="10"></textarea>
        <button class="btn btn-dark" name="new_post" >Add Post</button>
    </form>
</div>
</body>
</html>