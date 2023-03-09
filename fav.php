<?php

include 'config.php';


$id = $_GET['id'];

$email = $_SESSION['email'];

$dataFetchQuery = "SELECT * FROM `users` WHERE email_id = '$email'";
$run = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($run);
$user_id = $data['id'];


$addquery = "INSERT INTO `addfav`(`user_id`, `resource_id`) VALUES ('$user_id','$id')";

mysqli_query($conn, $addquery);

if ($addquery) {
    // echo "<script>alert('Add In To Fav')</script>";
    echo "<script>alert('updated!!!')</script>";
    echo "<script>location.href='resource.php'</script>";
}
?>