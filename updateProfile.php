<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style/addUpdate.css">
    <title>Document</title>
  </head>
  <body>
    <header class="bg-header">
      <div class="container bg-top">
      <?php
      include 'navBarIn.php';
      ?>
      </div>
    </header>
    <h1 class="text-center">Update Profile</h1>
    <div class="container">
      <form class="form-design mx-auto">
      
        <div class="row mb-3">
          <label for="" class="col-sm-3 col-form-label">Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="exampleInputName" required>
          </div>
        </div>
      
        <div class="row mb-3">
          <label for="exampleInputEmail" class="col-sm-3 col-form-label">Department</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="exampleInputEmail" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="exampleInputEmail" class="col-sm-3 col-form-label">Institution</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="exampleInputEmail" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="exampleInputEmail" class="col-sm-3 col-form-label">Phone</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="exampleInputEmail" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="exampleInputEmail" class="col-sm-3 col-form-label">Research Interest</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="exampleInputEmail" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="exampleInputEmail" class="col-sm-3 col-form-label">Courses</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="exampleInputEmail" required>
          </div>
        </div>
      
        <div class="row mb-0">
          <div class="col-sm-9 offset-sm-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
          </div>
        </div>
      </form>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
