<?php include 'navBarIn.php'; ?>



<div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-passwordaction.php" method="POST" autocomplete="">
                    <h3 class="text-center">Forgot Password</h3>
                    <p class="text-center">Enter your email address</p>
                    <div class="form-group mb-4">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button btn btn-info" type="submit" name="check-email" value="Continue">
                    </div>
                    <div class="link forget-pass text-left"><a href="signin.php">Back to login?</a></div>
                    
                </form>
            </div>
        </div>
    </div>
    
