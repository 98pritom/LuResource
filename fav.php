<?php

include 'config.php';


$id = $_GET['id'];

$email = $_SESSION['email'];

$dataFetchQuery = "SELECT * FROM `users` WHERE email_id = '$email'";
$run = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($run);
$user_id = $data['id'];


$duplicate_product_id = mysqli_query($conn, "SELECT * FROM `addfav` WHERE resource_id = '$id' and user_id = '$user_id'");
if (mysqli_num_rows($duplicate_product_id) > 0) {
    // include 'resource.php';
    echo "<script>alert('Resource is already in your favourite!')</script>";
    echo "<script>location.href='resource.php'</script>";
} else {
    $addquery = "INSERT INTO `addfav`(`user_id`, `resource_id`) VALUES ('$user_id','$id')";

    mysqli_query($conn, $addquery);

    if ($addquery) {
        // echo "<script>alert('Add In To Fav')</script>";
        echo "<script>alert('updated!!!')</script>";
        echo "<script>location.href='profile.php'</script>";
    } else {
        echo "<script>alert('Something went wrong while updating!!')</script>";
        echo "<script>location.href='resource.php'</script>";
    }
}
