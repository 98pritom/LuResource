<?php 
require('config.php');

if(isset($_SESSION['isUserLoggedIn'])){
    echo "<script>window.location.href='home.php ? user_already_loggedin';</script>";
}

if (isset($_POST['signin'])) {
    // print_r($_POST);
    $password = crypt($_POST['password'],"LuResource");
    $query = "SELECT * FROM `users` WHERE email_id = '{$_POST['emailid']}'  AND password = '$password'";
    $run = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($run);

    if (count($data) > 0) {
        $_SESSION['isUserLoggedIn'] = true;
        $_SESSION['emailId'] = $_POST['emailid'];
        $_SESSION['role'] = $data['role'];

        echo "<script>window.location.href='resource.php ? user_loggedin'</script>";
    }
    else{
        echo "<script>alert('incorrect_email_or_password');</script>";
        echo "<script>window.location.href='signin.php ? incorrect_email_or_password'</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SignIn</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="style/signinUp.css">
</head>

<body>
    <header>
        <?php
        include 'navBarOut.php';
        ?>
    </header>
    <main>
        <section>
            <div class="parent-div">
                <div class="img-div">
                    <img src="images/login-banner.jpg" alt="" class="img-design">
                </div>
                <div class="form-div">
                    <h1>Welcome back!</h1>
                    <p class="fw4">Please login to your account</p>
                    <form method="post" id="form">
                        <div class="mb-3 txt_field">
                            <input type="email" id="email" name="emailid" placeholder="Email">
                        </div>
                        <div class="mb-3 txt_field">
                            <input type="text" id="pass" name="password" placeholder="Password">
                        </div>
                        <button type="submit" name="signin" class="btn-design">Sign In</button>
                        <p>Forgot Password?</p>
                        <p class="d-inline">Don't have any account?</p><a class="change-color" href="signup.php"> Sign Up</a>
                    </form>
                </div>
            </div>
        </section>
        <hr id="hr1">
    </main>
    <footer>
        <div class="container-fluid m-0 p-0 ">
        <div class="d-flex foo">
            <div >
                <h4 class="fw5">Lu<span class="change-color">Resource</span></h4>
                <p>Keep all your files safe with <br> powerful online cloud storage</p>
            </div>
             <div class="ms-5">
                 <h5 class="mx-2">Navigate</h5>
                 <div class="d-flex navi">
                     <a href="#" class="mx-2">Home</a>
                     <a href="#" class="mx-2">About us</a>
                     <a href="#" class="mx-2">Resources</a>
                 </div>
             </div>
             
        </div>
    </div>
    </footer>

    <script>
        const email_id = document.getElementById("email");
        const pass = document.getElementById("pass");
        const form = document.getElementById("form");

        form.addEventListener("submit", (e) => {

            if(!/^(cse|eee|law)_\d{10}@lus.ac.bd$/.test(email_id.value)){
                alert("Must be leading university edu mail");
                e.preventDefault();
            }

            if (!/[0-9]/.test(pass.value)) {
                alert("Must contain a digit");
                e.preventDefault();
            }
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>