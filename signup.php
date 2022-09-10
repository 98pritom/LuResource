<?php
require('config.php');


if(isset($_SESSION['isUserLoggedIn'])){
    echo "<script>window.location.href='home.php ? user_already_loggedin';</script>";
}

if (isset($_POST['signup'])) {
    // print_r($_POST);
    $query = "SELECT * FROM `users` WHERE email_id = '{$_POST['emailId']}'";
    $run = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($run);

    if (count($data) > 0) {
        echo "<script>window.location.href='signup.php ? user_already_exist'</script>";
    } else {
        $password = crypt($_POST['password'],"LuResource");
        $query = "INSERT INTO `users`(`full_name`, `email_id`,`department`,`mbl_num`, `password`, `role`) VALUES ('{$_POST['fullName']}','{$_POST['emailId']}','{$_POST['department']}','{$_POST['mblNumber']}','$password','teacher')";
        $run = mysqli_query($conn, $query);

        if ($run) {
            echo "<script>window.location.href='signin.php ? user_registered_successfully'</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SignUp</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="style/signin.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav-design">
            <div class="container-fluid">
                <a class="navbar-brand fw6" href="#">Teacher's <span class="change-color">Drive</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw6" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw6" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw6" href="#">Resources</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a href="signin.html"><button class="btn fw6" type="submit">Sign In</button></a>
                        <a href="signup.html"><button class="btn btn-success fw6" type="submit">Sign Up</button></a>
                    </div>

                </div>

            </div>
        </nav>
    </header>
    <main>
        <section>
            <div class="parent-div">
                <div class="img-div">
                    <img src="images/login-banner.jpg" alt="" class="img-design">
                </div>
                <div class="form-div">
                    <h1>Create Account</h1>
                    <p class="fw4">Fill in the details below to create an account</p>
                    <form id="form" method="post" enctype="multipart/form-data">
                        <div class="mb-3 txt_field">
                            <input type="text" id="name" name="fullName" placeholder="Name">
                        </div>
                        <div class="mb-3 txt_field">
                            <input type="email" id="email" name="emailId" placeholder="Email">
                        </div>
                        <div class="mb-3 txt_field">
                            <input type="text" id="department" name="department" placeholder="Department">
                        </div>
                        <div class="mb-3 txt_field">
                            <input type="number" id="number" name="mblNumber" placeholder="Mobile Number">
                        </div>
                        <div class="mb-3 txt_field">
                            <input type="text" id="npass" name="password" placeholder="Password">
                        </div>
                        <div class="mb-3 txt_field">
                            <input type="text" id="cpass" name="cpass" placeholder="Confirm Password">
                        </div>
                        <div class="mb-3 ">
                            <input class="form-control" type="file" id="image" name="image" placeholder="image">
                            <img src="" alt="">
                        </div>
                        <button type="submit" name="signup" class="btn-design">Sign Up</button><br>
                        <p class="d-inline">Already have an account?</p><a class="change-color" href="signin.php"> Sign In</a>
                    </form>
                </div>
            </div>
        </section>
        <hr id="hr1">
    </main>
    <footer>
        <div class="container-fluid p-0 d-flex">
            <div class="footer-content">
                <h4 class="fw5">Teacher's <span class="change-color">Drive</span></h4>
                <p>Keep all your files safe with <br> powerful online cloud storage</p>
            </div>
            <div class="footer-nav">
                <h5 class="">Products</h5>
                <nav>
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw6" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw6" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw6" href="#">Resources</a>
                        </li>
                    </ul>
                </nav>
            </div>
    </footer>

    <script>
        const firstName = document.getElementById("name");
        const email = document.getElementById("email");
        const pass = document.getElementById("npass");
        const confirmPass = document.getElementById("cpass");
        const form = document.getElementById("form");

        form.addEventListener("submit", (e) => {

            if (!/^[a-zA-Z .]+$/.test(firstName.value)) {
                alert("First name can not contain number");
                e.preventDefault()
            }

            if (!/^(\+88-|\+88)?01[3-9]\d{8}$/.test(num.value)) { /// +88
                alert("Must be a Bangladeshi number");
                e.preventDefault();
            }

            if (!/[0-9]/.test(pass.value)) {
                alert("Must contain a digit");
                e.preventDefault()
            }

            if (pass.value != confirmPass.value) {
                alert("Password does not match");
                e.preventDefault()
            }
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>