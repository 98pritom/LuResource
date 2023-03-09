<?php

include 'config.php';

if (!isset($_SESSION['email'])) {
    echo "<script>alert('Please signin to enter this page');</script>";
    echo "<script>window.location.href='signin.php ? user_not_loggedin';</script>";
}

$dataFetchQuery = "SELECT * FROM `users` WHERE email_id = '{$_SESSION['email']}'";
$run = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($run);
// print_r($data);
// echo $data['image'];


if (isset($_POST['update'])) {
  // print_r($_POST);
  // $updateQuery = "SELECT * FROM `users` WHERE email_id = '{$_POST['emailId']}'";
  $image = $_FILES['image'];
  $oldImage = $data['image'];
  $imageName = $image['name'];
  $image_location = $image['tmp_name'];
  $imageDes = "storage/" . $imageName;

  if(strlen($imageDes) > 9){
    move_uploaded_file($image_location, $imageDes);
    $updateQuery = "UPDATE `users` SET `designation`='{$_POST['designation']}',`department`='{$_POST['dept']}',`inst`='{$_POST['institution']}',`mbl_num`='{$_POST['phone']}',`ri`='{$_POST['ri']}',`crs`='{$_POST['crs']}',`image`='$imageDes' WHERE email_id = '{$_SESSION['email']}'";
  }
  else{
    $updateQuery = "UPDATE `users` SET `designation`='{$_POST['designation']}',`department`='{$_POST['dept']}',`inst`='{$_POST['institution']}',`mbl_num`='{$_POST['phone']}',`ri`='{$_POST['ri']}',`crs`='{$_POST['crs']}',`image`='$oldImage' WHERE email_id = '{$_SESSION['email']}'";

  }

  if (mysqli_query($conn, $updateQuery)) { 
    echo "<script>alert('updated!!!')</script>";
    echo "<script>location.href='profile.php'</script>";
}else{
  echo "<script>alert('not updated!!!')</script>";
}

 
}

?>