<?php
include 'config.php';


$id = $_POST['id'];

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
$oldImage = $_POST['oldImage'];
$oldPdf = $_POST['oldPdf'];
$oldVideo = $_POST['oldVideo'];


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

$oldImage1= "resourseImage/";
$oldPdf1= "pdf/";
$oldVideo1= "video/";

if(strlen($imageDes) > 15){
    $oldImage1 = $imageDes;
}
else{
    $oldImage1 = $oldImage;
}
if(strlen($PdfDes) > 4){
    $oldPdf1 = $PdfDes;
}else{
    $oldPdf1 = $oldPdf;
}
if(strlen($VideoDes) > 6){
    $oldVideo1 = $VideoDes;
}else{
    $oldVideo1 = $oldVideo;
}


if(strlen($oldImage1) > 15 || strlen($oldPdf1) > 4 || strlen($oldVideo1) > 6)
{
    $updateQuery = "UPDATE `resource` SET `user_id`='$user_id',`teacher_name`='$full_name',`course_title`='$title',`topic`='$topic',`description`='$description',`image`='$oldImage1',`pdf`='$oldPdf1',`video`='$oldVideo1',`status`='$status' WHERE id='$id'";
} else {
    $updateQuery = "UPDATE `resource` SET `user_id`='$user_id',`teacher_name`='$full_name',`course_title`='$title',`topic`='$topic',`description`='$description',`image`='$oldImage1',`pdf`='$oldPdf1',`video`='$oldVideo1',`status`='$status' WHERE id='$id'";
}


if (!mysqli_query($conn, $updateQuery)) {

    die("Not Inserted!");
}else{
    echo "<script>alert('Resource Inserted!!')</script>";
    echo "<script>location.href='resource.php'</script>";
}


