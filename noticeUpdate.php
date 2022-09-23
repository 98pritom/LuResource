<?php
require('config.php');

if (!isset($_SESSION['isUserLoggedIn'])) {
  echo "<script>alert('Please signin to enter this page');</script>";
  echo "<script>window.location.href='signin.php ? user_not_loggedin';</script>";
}
if ($_SESSION['role'] != 'teacher') {
  echo "<script>window.location.href='signin.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="style/addUpdate.css">
  <title>Notice Update</title>
</head>

<body>
  <header class="bg-header">
    <div class="container bg-top">
      <?php
      include 'navBarIn.php';
      ?>
    </div>
  </header>
  <h1 class="text-center">Add Notice</h1>
  <div class="container">
    <form class="form-design mx-auto">

      <div class="row mb-3">
        <label for="" class="col-sm-3 col-form-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="exampleInputName" placeholder="Course Title" required>
        </div>
      </div>

      <div class="row mb-3">
        <label for="exampleCustomFile" class="col-sm-3 col-form-label">Add Image</label>
        <div class="col-sm-9">
          <input type="file" class="form-control" id="exampleCustomFile" required>
        </div>
      </div>
      <center>
        <h6 class="mb-4">OR</h6>
      </center>

      <div class="row mb-3">
        <label for="exampleTextareaBio" class="col-sm-3 col-form-label">Write notice</label>
        <div class="col-sm-9">
          <textarea class="form-control" id="exampleTextareaBio" required></textarea>
        </div>
      </div>

      <div class="row mb-0">
        <div class="col-sm-9 offset-sm-3">
          <button type="submit" class="btn btn-primary">Upload</button>
          <button type="reset" class="btn btn-secondary"><a href="resource.php" class="nav-link p-0 text-white">Cancel</a></button>
        </div>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>