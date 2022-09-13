<?php
require('config.php');

if (!isset($_SESSION['isUserLoggedIn'])) {
    echo "<script>window.location.href='signin.php ? user_not_loggedin';</script>";
}
if ($_SESSION['role'] != 'teacher') {
    echo "<script>window.location.href='signin.php';</script>";
}
// $user_data = "SELECT * FROM `users` WHERE email_id = '{$_SESSION['emailId']}'";
// $result = mysqli_query($conn, $user_data);
// $row = mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style/profile.css">
</head>

<body>

    <div class="bg">
        <div class="container">
            <section id="navbar">
                <?php
                include 'navBarIn.php';
                ?>

            </section>

            <main id="main" class="p-5">
                <?php

                $user_data = "SELECT * FROM `users` WHERE email_id = '{$_SESSION['emailId']}'";
                $result = mysqli_query($conn, $user_data);
                $row = mysqli_fetch_array($result);
                // print_r($row);


                // while ($row = mysqli_fetch_array($result)) {

                    echo "<div class='row'>
                    <div class='col-md-4 col-12 mb-5 lg-profile'>
                        <img src='$row[image]' alt='image' height='300px' width='300px' class='rounded-circle border border-secondary img-thumbnail'>
                    </div>
                    <div class='col-md-6 profile-info text-light'>
                        <div class='col-12 col-md-6'>
                            <h2>$row[full_name]</h2>
                            <p style='font-size: 20px';>Lecturer</p>
                        </div>
                        <div class='details mt-5'>
                        
                            <div class='row'>
                                <div class='col-md-3'>
                                    <p>Department</p>
                                </div>
                                <div class='col-md-9'>
                                    <h5>$row[department]</h5>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-3'>
                                    <p>Institution</p>
                                </div>
                                <div class='col-md-9'>
                                    <h5>Leading University</h5>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-3'>
                                    <p>Email</p>
                                </div>
                                <div class='col-md-9'>
                                    <h5>$row[email_id]</h5>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-3'>
                                    <p>Phone</p>
                                </div>
                                <div class='col-md-9'>
                                    <h5>$row[mbl_num]</h5>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-3'>
                                    <p>Research Interest</p>
                                </div>
                                <div class='col-md-9'>
                                    <h5>ML</h5>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-3'>
                                    <p>Courses</p>
                                </div>
                                <div class='col-md-9'>
                                    <h5>Many</h5>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class='col-md-2 float-end button'>
                    <a href='updateProfile.php'><button type='submit' class='btn btn-primary mb-2 pe-4 ps-4'>Edit</button></a>
                    <a href='signout.php'><button type='submit' class='btn btn-primary pe-4 ps-4'>Signout</button></a>
                    </div>
                </div>";
                // }
                ?>
            </main>

            <footer>
                <hr style="height:2px; width:100%; border-width:0; color:white; background-color:white">
                <div class="row mt-5">
                    <div class="col-md-4 text-light">
                        <h3>LuResource</h3>
                        <p>Keep all your files safe with powerful online cloud storage </p>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-3 text-light fw-bold">Products</p>
                        <div class="d-flex gap-3 text-light">
                            <p>Home</p>
                            <p>About us</p>
                            <p>Resources</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>