<?php include 'navBarIn.php'; ?>
<?php 
error_reporting(0);



if (isset($_POST['signin'])) {
    // print_r($_POST);
    $password = $_POST['password'];
    $email = $_POST['emailid'];
    $query = mysqli_query($conn, "SELECT * FROM `users` WHERE email_id ='$email' And password='$password'");
    $data = mysqli_fetch_array($query);
    $status = $data['status'];
    if ($status == 'verified') {
        $_SESSION['isUserLoggedIn'] = true;
        $_SESSION['email'] = $_POST['emailid'];
        $_SESSION['role'] = $data['role'];
        echo "<script>window.location.href='index.php ? user_loggedin'</script>";
    }
    else{
        echo "<script>alert('incorrect_email_or_password');</script>";
        // echo "<script>window.location.href='signin.php ? incorrect_email_or_password'</script>";
    }
}
?>
<link rel="stylesheet" href="style/signinUp.css">
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
                        <p><a href="forgotpassword.php" class="">Forgot Password?</a></p>
                        <p class="d-inline">Don't have any account?</p><a href="signup.php"> Sign Up</a>
                    </form>
                </div>
            </div>
        </section>
        <hr id="hr1">
    </main>
    

      
<?php include 'footer.php'; ?>

    <script>
        const email_id = document.getElementById("email");
        const pass = document.getElementById("pass");
        const form = document.getElementById("form");

        form.addEventListener("submit", (e) => {

            if(!/^(cse|eee|law)_\d{10}@lus.ac.bd$/.test(email_id.value)){
                alert("Must be leading university edu mail");
                e.preventDefault();
            }

            if (!/([0-9a-zA-Z]){6,}/.test(pass.value)) {
                alert("Must be 6 character or more!");
                e.preventDefault();
            }
        })
    </script>