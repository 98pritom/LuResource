<?php

include 'config.php';

$id = $_GET['id'];


$deletequery = "DELETE FROM `notice` WHERE id='$id'";

mysqli_query($conn, $deletequery);

if ($deletequery) {
    echo "<script>alert('Delete Successfull')</script>";
    header("location:deleteNotice.php");
}
?>
