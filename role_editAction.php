<?php
include 'config.php';
$id = $_GET['id'];

$role = $_POST['new_role'];

$updateQuery = "UPDATE `users` SET `role`='$role' WHERE id='$id'";



if (!mysqli_query($conn, $updateQuery )) {
    die("Not Inserted!");
}else{
    echo "<script>alert('Updated Successfully!!')</script>";
    echo "<script>location.href='user.php'</script>";
}
?>


