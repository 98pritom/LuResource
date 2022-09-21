
<?php
$dataFetchQuery = "SELECT * FROM `users` WHERE email_id = '{$_SESSION['emailId']}'";
$run = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($run);

echo "<nav class='navbar navbar-expand-lg navbar-light bg-light nav-design'>
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
                        <li class='nav-item'>
                            <a class='nav-link fw6' href='resource.php'>Resources</a>
                        </li>
                    </ul>
                    <form class='d-flex' role='search'>
                    <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search'>
                    <button class='btn btn-outline-success' type='submit'>Search</button>
                    </form>
                    <div class='d-flex ms-5'>
                      <a href='profile.php'><img src='$data[image]' class='rounded-circle img-thumbnail' width='40px' alt='Profile'></a>
                  </div>

                </div>

            </div>
        </nav>";
        ?>