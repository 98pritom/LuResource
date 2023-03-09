<?php

include 'config.php';

$id = $_GET['id'];

echo $id;

$deletequery = "DELETE FROM `addfav` WHERE resource_id ='$id'";

mysqli_query($conn, $deletequery);

if ($deletequery) {
    echo "<script>alert('Delete Successfull')</script>";
    header("location:profile.php");
}
?>
