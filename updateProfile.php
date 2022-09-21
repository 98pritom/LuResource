<?php
require('config.php');

if (!isset($_SESSION['isUserLoggedIn'])) {
  echo "<script>alert('Please signin to enter this page');</script>";
  echo "<script>window.location.href='signin.php ? user_not_loggedin';</script>";
}
if ($_SESSION['role'] != 'teacher') {
  echo "<script>window.location.href='signin.php';</script>";
}

$dataFetchQuery = "SELECT * FROM `users` WHERE email_id = '{$_SESSION['emailId']}'";
$run = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($run);
// print_r($data);
// echo $data['image'];


if (isset($_POST['update'])) {
  // print_r($_POST);
  // $updateQuery = "SELECT * FROM `users` WHERE email_id = '{$_POST['emailId']}'";
  $image = $_FILES['image'];
  $oldImage = $data['image'];
  $imageName = $image['name'];
  $image_location = $image['tmp_name'];
  $imageDes = "storage/" . $imageName;

  if(strlen($imageDes) > 9){
    move_uploaded_file($image_location, $imageDes);
    $updateQuery = "UPDATE `users` SET `designation`='{$_POST['designation']}',`department`='{$_POST['dept']}',`inst`='{$_POST['institution']}',`mbl_num`='{$_POST['phone']}',`ri`='{$_POST['ri']}',`crs`='{$_POST['crs']}',`image`='$imageDes' WHERE email_id = '{$_SESSION['emailId']}'";
  }
  else{
    $updateQuery = "UPDATE `users` SET `designation`='{$_POST['designation']}',`department`='{$_POST['dept']}',`inst`='{$_POST['institution']}',`mbl_num`='{$_POST['phone']}',`ri`='{$_POST['ri']}',`crs`='{$_POST['crs']}',`image`='$oldImage' WHERE email_id = '{$_SESSION['emailId']}'";

  }

  if (mysqli_query($conn, $updateQuery)) { 
    echo "<script>alert('updated!!!')</script>";
    echo "<script>location.href='profile.php'</script>";
}else{
  echo "<script>alert('not updated!!!')</script>";
}

 
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
    <form class="form-design mx-auto" method="POST" id="form" enctype="multipart/form-data">

      <div class="row mb-3">
        <label for="" class="col-sm-3 col-form-label">Designation</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" value="<?php echo $data['designation']?>" name="designation" id="designation" required>
        </div>
      </div>

      <div class="row mb-3">
        <label for="exampleInputEmail" class="col-sm-3 col-form-label">Department</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" value="<?php echo $data['department']?>" name="dept" id="exampleInputEmail" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="exampleInputEmail" class="col-sm-3 col-form-label">Institution</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" value="<?php echo $data['inst']?>" name="institution" id="exampleInputEmail" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="exampleInputEmail" class="col-sm-3 col-form-label">Phone</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" value="<?php echo $data['mbl_num']?>" name="phone" id="number" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="exampleInputEmail" class="col-sm-3 col-form-label">Research Interest</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" value="<?php echo $data['ri']?>" name="ri" id="exampleInputEmail" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="exampleInputEmail" class="col-sm-3 col-form-label">Courses</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" value="<?php echo $data['crs']?>" name="crs" id="exampleInputEmail" required>
        </div>
      </div>
      <div class="row mb-3">
      <label for="exampleInputEmail" class="col-sm-3 col-form-label">Image</label>
        <div class="mb-3 col-sm-9">
          <input class="form-control" type="file" value="<?php echo $data['image']?>" id="image" name="image">
        </div>
      </div>

      <div class="row mb-0">
        <div class="col-sm-9 offset-sm-3">
          <button type="submit" class="btn btn-primary" name="update">Update</button>
          <button type="reset" class="btn btn-secondary"><a href="profile.php" class="nav-link p-0 text-white">Cancel</a></button>
        </div>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<script>
        const designation = document.getElementById("designation");
        const number = document.getElementById("number");
        const form = document.getElementById("form");

        form.addEventListener("submit", (e) => {

            if (!/^[a-zA-Z .]+$/.test(designation.value)) {
                alert("Designation can not contain number");
                e.preventDefault();
            }

            if (!/^(\+88-|\+88)?01[3-9]\d{8}$/.test(number.value)) { /// +88
                alert("Must be a Bangladeshi number");
                e.preventDefault();
            }
        })
    </script>

</html>