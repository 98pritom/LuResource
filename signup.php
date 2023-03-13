<?php include 'navBarIn.php' ?>


<?php

// $email = "";
// $full_name = "";
// $errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $full_name = mysqli_real_escape_string($conn, $_POST['fullName']);
    $email = mysqli_real_escape_string($conn, $_POST['emailId']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $email_check = "SELECT * FROM users WHERE email_id = '$email'";
    $res = mysqli_query($conn, $email_check);
    if(mysqli_num_rows($res) > 0){
        // $errors['email'] = "Email that you have entered is already exist!";
        echo "<script>alert('Email that you have entered is already exist!!!')</script>";
        echo "<script>location.href='signup.php'</script>";
        
    }
    else{
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO `users`(`full_name`, `email_id`,`department`,`password`,`role`, `code`, `status`) VALUES ('$full_name','$email','$department','$password','student', '$code', '$status')";
        $data_check = mysqli_query($conn, $insert_data);
        if($data_check){
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: luresource22@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: user-otp.php');
                exit();
            }else{
                // $errors['otp-error'] = "Failed while sending code!";
                echo "<script>alert('Failed while sending code!!!!')</script>";
                echo "<script>location.href='signup.php'</script>";
            }
        }else{
            // $errors['db-error'] = "Failed while inserting data into database!";
            echo "<script>alert('Failed while inserting data into database!!!!')</script>";
            echo "<script>location.href='signup.php'</script>";
        }
    }
}

?>
<link rel="stylesheet" href="style/signinUp.css">
    <main>
        <section>
            <div class="parent-div">
                <div>
                    <img src="images/login-banner.jpg" alt="" class="img-design">
                </div>
                <div class="form-div">
                    <h1>Create Account</h1>
                    <p class="fw4">Fill in the details below to create an account</p>
                    <form action="signup.php" id="form" method="POST" enctype="multipart/form-data">
                        <div class="mb-3 txt_field">
                            <input type="text" id="name" name="fullName" placeholder="Name">
                        </div>
                        <div class="mb-3 txt_field">
                            <input type="email" id="email" name="emailId" placeholder="Email">
                        </div>
                        <div class="mb-3 txt_field">
                            <input type="text" id="department" name="department" placeholder="Department">
                        </div>
                        <!-- <div class="mb-3 txt_field">
                            <input type="number" id="number" name="mblNumber" placeholder="Mobile Number">
                        </div> -->
                        <div class="mb-3 txt_field">
                            <input type="text" id="npass" name="password" placeholder="Password">
                        </div>
                        <div class="mb-3 txt_field">
                            <input type="text" id="cpass" name="cpass" placeholder="Confirm Password">
                        </div>
                        <!-- <div class="mb-3 ">
                            <input class="form-control" type="file" id="image" name="image" placeholder="image">
                            <img src="" alt="">
                        </div> -->
                        <button type="submit" name="signup" class="btn-design">Sign Up</button><br>
                        <p class="d-inline">Already have an account?</p><a href="signin.php"> Sign In</a>
                    </form>
                </div>
            </div>
        </section>
        <hr id="hr1">
    </main>

      
<?php include 'footer.php'; ?>
    <script>
        const firstName = document.getElementById("name");
        const email_id = document.getElementById("email");
        // const number = document.getElementById("number");
        const dept = document.getElementById("department")
        const pass = document.getElementById("npass");
        const confirmPass = document.getElementById("cpass");
        const form = document.getElementById("form");

        form.addEventListener("submit", (e) => {

            if (!/^[a-zA-Z .]+$/.test(firstName.value)) {
                alert("Name can not contain number or special character!");
                e.preventDefault();
            }

            if(!/^(cse|eee|law)_\d{10}@lus.ac.bd$/ || /^[a-zA-Z0-9._%+-]+_cse@lus\.ac\.bd$/.test(email_id.value)){
                alert("Must be leading university edu mail");
                e.preventDefault();
            }

            if (!/^[a-zA-Z]+$/.test(dept.value)) {
                alert("Department can not contain number or special character!");
                e.preventDefault();
            }

            // if (!/^(\+88-|\+88)?01[3-9]\d{8}$/.test(number.value)) { /// +88
            //     alert("Must be a Bangladeshi number");
            //     e.preventDefault();
            // }

            if (!/([0-9a-zA-Z]){6,}/.test(pass.value)) {
                alert("Password must be 6 digit or more!");
                e.preventDefault();
            }

            if (pass.value != confirmPass.value) {
                alert("Password and confirm password does not match!!");
                e.preventDefault();
            }
        })
    </script>

    