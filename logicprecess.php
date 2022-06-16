<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'userdb';

$conn = new mysqli($servername, $username, $password, $dbName);

if (!$conn) {
    echo "<h3 class='container bg-dark text-center p-3 text-warning mt-5'>Not able to establish Database connection</h3>";
};
$sql = "SELECT * FROM post_tb";
$query = mysqli_query($conn, $sql);

if (isset($_POST["new_post"])) {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $sql = "INSERT INTO post_tb(title, content) VALUE ('$title', '$content')";
    mysqli_query($conn, $sql);
    header("Location: welcome.php?info=added");
    exit();

};

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "INSERT * FROM post_tb WHERE id =$sql";
    $query = mysqli_query($conn, $sql);
};

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM post_tb WHERE id =$id";
    $query = mysqli_query($conn, $sql);
};

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = " UPDATE post_tb SET title = '$title', content= '$content' WHERE id= $id ";
    mysqli_query($conn, $sql);

    header("Location: welcome.php?info=updated");
    exit();
};


// if (isset($_POST['delete'])) {
//     $id = $_POST['delete'];

//     $sql = "DELETE * FROM posts WHERE id =$id";
//     $query = mysqli_query($conn, $sql);

//     header("Location: welcome.php?info=deleted");
//     exit();
// };



?>