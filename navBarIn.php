<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lu Resource</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="style/aboutus.css">
    <?php
    include 'config.php';
    if(isset($_SESSION['email']))
    {
        $email = $_SESSION['email'];
        $dataFetchQuery = "SELECT * FROM `users` WHERE email_id = '$email'";
        $run = mysqli_query($conn, $dataFetchQuery);
        $data = mysqli_fetch_array($run);
        echo "";
    }
    
    
    ?>
</head>

<body>

    <nav class='navbar navbar-expand-lg navbar-light'>
            <div class='container-fluid'>
                <a class='navbar-brand fw6' href='#'>Lu<span class='change-color'>Resource</span></a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse justify-content-center align-items-center' id='navbarSupportedContent'>
                    <ul class='navbar-nav m-auto mb-2 mb-lg-0'>
                        <li class='nav-item'>
                            <a class='nav-link fw6' aria-current='page' href='index.php'>Home</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link fw6' href='aboutus.php'>About Us</a>
                        </li>
                        <?php 
                        if(isset($_SESSION['email']))
                        {
                            echo "<li class='nav-item'>
                            <a class='nav-link fw6' href='resource.php'>Resources</a>
                            </li>";
                        }
                      
                        ?>  
                        
                        <?php 
                        if(isset($_SESSION['email']))
                        if($data['email_id'] == 'cse_1912020117@lus.ac.bd')
                        {
                            {
                                echo "<li class='nav-item'>
                                <a class='nav-link fw6' href='user.php'>User</a>
                                </li>
                                <li class='nav-item'>
                                <a class='nav-link fw6' href='deleteNotice.php'>Notice Delete</a>
                                </li>
                               
                                
                                ";
                            }
                        }
                       
                      
                        ?>  

                        <li class='nav-item'>
                            <a class='nav-link fw6' href='faculty-li.php'>Faculty</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link fw6' href='notice.php'>Notice</a>
                        </li>
                    </ul>
                    
                    <?php 
                    if(isset($_SESSION['email']))
                    {
                        echo "<div class='d-flex ms-5'>
                      <a href='profile.php'><img src='$data[image]' class='rounded-circle  navimg' width='40px' alt='Profile'></a>
                        </div>";
                    } else{
                        echo "<div class='d-flex ms-5'>
                        <a href='signin.php'><button class='btn fw6 text-white' type='submit'>Sign In</button></a>
                        <a href='signup.php'><button class='btn btn-success fw6' type='submit'>Sign Up</button></a>
                    </div>";
                    }
                    

                    ?>

                </div>

            </div>
        </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>