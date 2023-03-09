<?php
include 'config.php';

$title = $_POST['title'];
// $description = $_POST['description'];
$image = $_FILES['image'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$imageDes = 'noticeImage/' . $imageName;


move_uploaded_file($imageLocation, $imageDes);



$insert_product = mysqli_query($conn, "INSERT INTO `notice`(`title`, `image`) VALUES ('$title', '$imageDes')");


if ($insert_product) {
    echo "<script>alert('Product Successfully Inserted')</script>";
    echo "<script>location.href = 'notice.php'</script>";
} else {
    echo "<script>alert('Not Inserted!')</script>";
    echo "<script>location.href = 'addnotice.php'</script>";
}
