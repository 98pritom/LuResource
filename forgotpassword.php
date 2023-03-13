<?php include 'navBarIn.php'; ?>



<div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-passwordaction.php" method="POST" autocomplete="off">
                    <h3 class="text-center mb-4">Forgot Password</h3>
                    <div class="form-group mb-4">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button btn btn-success" type="submit" name="check-email" value="Continue">
                    </div>
                    <div class="link forget-pass"><a href="signin.php" class="nav-link pe-5">Back to login?</a></div>
                    
                </form>
            </div>
        </div>
    </div>
    
