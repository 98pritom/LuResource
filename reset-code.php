<?php include 'navBarIn.php'; ?>
<?php 



if(!isset($_SESSION['email'])){
  header('Location: signin.php');
}
?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form mt-5">
                <form action="reset-codeAction.php" method="POST" autocomplete="off">
                    <h2 class="text-center mb-4">Code Verification</h2>
                    <div class="form-group mb-3">
                        <input class="form-control" type="number" name="otp" placeholder="Enter code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-reset-otp" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    

    
</body>
</html>