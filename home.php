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
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Resource</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <header class="bg-header">
    <div class="container bg-top">
      <?php
      include 'navBarIn.php';
      ?>

      <div class="section-header mt-5">
        <h1>Explore our smart resources</h1>
        <p class="p-header1">At home in the office or on the go, Dropbox keeps your personal and busines files</p>
        <p class="p-header2">safe and gives you the tools you need to protect the work you share.</p>
      </div>
    </div>
  </header>
  <main>
    <section class="sec_section mt-5 ">
      <div class="container drop ">
        <div class="dropdown mx-2 bg-white">
          <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <small>Course</small><br>
            <b> All courses-</b>
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">course-code</a></li>
            <li><a class="dropdown-item" href="#">course-code</a></li>
            <li><a class="dropdown-item" href="#">course-code</a></li>
          </ul>
        </div>
        <div class="dropdown mx-2 bg-white">
          <a class="btn  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <small>Add files</small><br>
            <b> All file types-</b>
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addResource.php">Add Lecture Notes</a></li>
            <li><a class="dropdown-item" href="noticeUpdate.php">Add Notice</a></li>
          </ul>
        </div>
      </div>
    </section>

    <div class="container mt-5">
      <!--   <div class="card card-block mb-2">
                    <h4 class="card-title">Card 1</h4>
                    <p class="card-text">Welcom to bootstrap card styles</p>
                    <a href="#" class="btn btn-primary">Submit</a>
                  </div>   -->
      <div class="row">
        <div class="col-lg-4 col-md-3 col-sm-6">
          <div class="card card-block ">
            <img src="images/cloudcomp-2.png" alt="">
            <h5 class="card-title m-1">Protecting your content against cyber threats and data loss.</h5>
            <p class="card-text m-1">Protecting your sensitive files is a top priority.</p>
            <a class="text-left text-hyperlink m-2" href="#"><strong>Explore resources</strong></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-6">
          <div class="card card-block ">
            <img src="images/cloudcomp-2.png" alt="">
            <h5 class="card-title m-1"><strong>Protecting your content against cyber threats and data loss.</strong></h5>
            <p class="card-text m-1">Protecting your sensitive files is a top priority.</p>
            <a class="text-left text-hyperlink m-2" href="#"><strong>Explore resources</strong></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-6">
          <div class="card card-block ">
            <img src="images/cloudcomp-2.png" alt="">
            <h5 class="card-title m-1"><strong>Protecting your content against cyber threats and data loss.</strong></h5>
            <p class="card-text m-1">Protecting your sensitive files is a top priority.</p>
            <a class="text-left text-hyperlink m-2" href="#"><strong>Explore resources</strong></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-6">
          <div class="card card-block ">
            <img src="images/cloudcomp-2.png" alt="">
            <h5 class="card-title m-1"><strong>Protecting your content against cyber threats and data loss.</strong></h5>
            <p class="card-text m-1">Protecting your sensitive files is a top priority.</p>
            <a class="text-left text-hyperlink m-2" href="#"><strong>Explore resources</strong></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-6">
          <div class="card card-block ">
            <img src="images/cloudcomp-2.png" alt="">
            <h5 class="card-title m-1"><strong>Protecting your content against cyber threats and data loss.</strong></h5>
            <p class="card-text m-1">Protecting your sensitive files is a top priority.</p>
            <a class="text-left text-hyperlink m-2" href="#"><strong>Explore resources</strong></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-6">
          <div class="card card-block ">
            <img src="images/cloudcomp-2.png" alt="">
            <h5 class="card-title m-1"><strong>Protecting your content against cyber threats and data loss.</strong></h5>
            <p class="card-text m-1">Protecting your sensitive files is a top priority.</p>
            <a class="text-left text-hyperlink m-2" href="#"><strong>Explore resources</strong></a>
          </div>
        </div>




      </div>





      </section>



  </main>

  <footer>
    <div class="container-fluid m-0 p-0 ">
      <div class="d-flex  foo">
        <div>
          <h4 class="fw5">Lu<span class="change-color">Resource</span></h4>
          <p>Keep all your files safe with <br> powerful online cloud storage</p>
        </div>
        <div class="ms-5">
          <h5 class="mx-2">Products</h5>
          <div class="d-flex">
            <a href="#" class="mx-2">Home</a>
            <a href="#" class="mx-2">About us</a>
            <a href="#" class="mx-2">Resources</a>
          </div>
          <button type="submit" class="btn-design"><a href="signout.php">SignOut</a></button>
        </div>
        
      </div>

    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>