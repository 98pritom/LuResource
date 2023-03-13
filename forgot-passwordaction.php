<?php
include 'config.php';




if(isset($_POST['check-email'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $check_email = "SELECT * FROM users WHERE email_id='$email'";
    $run_sql = mysqli_query($conn, $check_email);
    if(mysqli_num_rows($run_sql) > 0){
        $code = rand(999999, 111111);
        $insert_code = "UPDATE users SET code = $code WHERE email_id = '$email'";
        $run_query =  mysqli_query($conn, $insert_code);
        if($run_query){
            $subject = "Password Reset Code";
            $message = "Your password reset code is $code";
            $sender = "From: luresource22@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a passwordd reset otp to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: reset-code.php');
                exit();
            }else{
                echo "<script>alert('Failed while sending code!!')</script>";
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            echo "<script>alert('Something went wrong!!')</script>";
            $errors['db-error'] = "Something went wrong!";
        }
    }else{
        echo "<script>alert('This email address does not exist!!')</script>";
        $errors['email'] = "This email address does not exist!";
    }
}

?>