<?php
include 'config.php';


$email = $_SESSION['email'];

$dataFetchQuery = "SELECT * FROM `users` WHERE email_id = '$email'";
$run = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($run);

$user_id = $data['id'];
$full_name = $data['full_name'];


$title = $_POST['course_title'];
$topic= $_POST['topic'];
$description = $_POST['description'];
$image = $_FILES['image'];
$pdf = $_FILES['pdf'];
$pdf_name = $pdf['name'];
$pdf_tmp_name = $pdf['tmp_name'];
$status = $_POST['status'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$video = $_FILES['video'];
$video_name = $video['name'];
$video_tmp_name = $video['tmp_name'];




$imageDes = 'resourseImage/' . $imageName;

move_uploaded_file($imageLocation, $imageDes);

$PdfDes = 'pdf/' . $pdf_name;

move_uploaded_file($pdf_tmp_name, $PdfDes);


$VideoDes = 'video/' . $video_name;

move_uploaded_file($video_tmp_name, $VideoDes);


$sql = "INSERT INTO `resource`(`user_id`, `teacher_name`,`course_title`, `topic`, `description`, `image`, `pdf`, `video`, `status`) VALUES ('$user_id','$full_name','$title','$topic','$description','$imageDes', '$PdfDes', '$VideoDes', '$status')";



if (!mysqli_query($conn, $sql)) {

    die("Not Inserted!");
}else{
    echo "<script>alert('Resource Inserted!!')</script>";
    echo "<script>location.href='resource.php'</script>";
}


