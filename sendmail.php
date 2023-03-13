<?php
include 'config.php';

if(isset($_SESSION['email']))
{
    $email = $_SESSION['email'];
}

$dataFetchQuery = "SELECT * FROM `users` WHERE email_id = '$email'";
$run = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($run);


$email = $data['email_id'];
$subjectMail = $_POST['subject'];
$message = $_POST['message'];
$emailme = $_POST['emailme'];
$id = $_POST['id'];


echo $email;

echo $emailme;
$to = $emailme;
$subject = $subjectMail;
$message = $message;
$headers = "From: $email";
mail($to, $subject, $message, $headers);




echo "<script>location.href = 'faculty-li-details.php?id=$id'</script>";



?>
