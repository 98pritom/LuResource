<?php
require('config.php');
if(!isset($_SESSION['isUserLoggedIn'])){
    echo "<script>window.location.href='signin.php ? user_not_loggedin';</script>";
}
if($_SESSION['role']!='teacher'){
    echo "<script>window.location.href='signin.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Teacher Home</h1>
    <h2><?=$_SESSION['emailId']?></h2>
    <h2><a href="signout.php">Sign Out</a></h2>
</body>

</html>