<?php
include 'config.php';

$email = $_SESSION['email'];

if(isset($_POST['change-password'])){

    $_SESSION['info'] = "";
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    echo $password;
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    echo $cpassword;
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    else{
        $code = 0; 
        $email = $_SESSION['email'];
        echo $email;
        $update_pass = "UPDATE users SET code = $code, password = '$password' WHERE email_id = '$email'";
        $run_query = mysqli_query($conn, $update_pass);
        if($run_query){
            $info = "Your password changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: signin.php');
        }else{
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}



?>