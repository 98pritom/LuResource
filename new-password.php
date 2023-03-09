<?php include 'navBarIn.php'; ?>


<div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="new-passwordAction.php" method="POST" >
                    <h2 class="text-center">New Password</h2>
                    
                  
                    <div class="form-group mb-4">
                        <input class="form-control" type="password" name="password" placeholder="Create new password" required>
                    </div>
                    <div class="form-group mb-4">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm your password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button btn btn-info" type="submit" name="change-password" value="Change">
                    </div>
                </form>
            </div>
        </div>
    </div>
    