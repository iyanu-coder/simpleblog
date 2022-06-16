<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boostrap/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container col-2">

        <form action="uploadprocess.php" method="POST" enctype="multipart/form-data" >
            Select file
            <input type="file" name="fileToUpload" id="fileToUpload" ><br>
            <input class="btn btn-primary" type="submit" name="submit" value="Upload Image"> 
        </form>
    </div>
</body>
</html>