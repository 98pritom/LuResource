<?php

include 'config.php';

$id = $_GET['id'];

$deletequery = "DELETE FROM `users` WHERE id='$id'";

mysqli_query($conn, $deletequery);

if ($deletequery) {
    echo "<script>alert('Delete Successfull')</script>";
    header("location:user.php");
}
?>
