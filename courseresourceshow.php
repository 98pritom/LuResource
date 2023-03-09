<?php include 'navBarIn.php'; ?>

<?php


if (!isset($_SESSION['email'])) {
  echo "<script>alert('Please signin to enter this page');</script>";
  echo "<script>window.location.href='signin.php ? user_not_loggedin';</script>";
}
$course_title = $_GET['course_title'];
?>

<!-- <style>
  .col-lg-4
  {
    margin-bottom: 2rem;
  }
  .card-block
  {
    height:100%;
 
  }
  .resource
  {
    text-decoration:none;
  }
  .card h3, h6{
    color:black;
  }

  .card
  {
    border-radius:2rem;
    padding:1rem;
    padding-bottom: 1rem !important;
    box-shadow:3px 3px 3px 3px;
  }

  .card:hover{
    border:1px solid #004643;
    box-shadow:5px;
  }

  .teachupload
  {
    margin-top: 3rem;
  }
  .date
  {
    color:grey;
  }
</style> -->
<link rel="stylesheet" href="style/resource.css">
  <main>
    <section class="sec_section mt-5 ">
      <div class="container drop ">
        <div class="dropdown mx-2 bg-white">
          <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <small>Course</small><br>
            <b> All courses-</b>
          </a>

          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="resource.php">All Resource</a></li>
          <?php
        
          $alldata = mysqli_query($conn, "SELECT * FROM `resource` ORDER BY id DESC");

          while ($row = mysqli_fetch_array($alldata)) {
            echo "<li><a class='dropdown-item' href='courseresourceshow.php?course_title=$row[course_title]'>$row[course_title]</a></li>";
          }
          ?>
            
          </ul>
        </div>
        
        <?php 
        if ($data['role'] == 'teacher')
        {
          echo "<div class='dropdown mx-2 bg-white'>
          <a class='btn  dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
            <small>Add files</small><br>
            <b> All file types-</b>
          </a>
          <ul class='dropdown-menu'>
            <li><a class='dropdown-item' href='addResource.php'>Add Lecture Notes</a></li>
            <li><a class='dropdown-item' href='addnotice.php'>Add Notice</a></li>
          </ul>
        </div>";
        }
        
        ?>
      </div>
    </section>

    <div class="container mt-5">
      <!--   <div class="card card-block mb-2">
                    <h4 class="card-title">Card 1</h4>
                    <p class="card-text">Welcom to bootstrap card styles</p>
                    <a href="#" class="btn btn-primary">Submit</a>
                  </div>   -->
      <div class="row">

      <?php
        
        $alldata = mysqli_query($conn, "SELECT * FROM `resource` WHERE course_title = '$course_title'");

        while ($row = mysqli_fetch_array($alldata)) {
        echo "<div class='col-lg-4 col-md-3 col-sm-6 allshow'>
        <a href='resourceshow.php?id=$row[id]' class='resource'>
          <div class='card card-block'>
            <img src='images/cloudcomp-2.png' alt=''>
            <h3 class='card-title m-1'>$row[topic]</h3>
           
            <h6 class='card-text m-1'>Course Code: $row[course_title]</h6>
            <div class='teachupload ms-1 mt-5'>
              <h6>Uploaded By <span class='fw-bolder'>$row[teacher_name]</span></h6>
              <p class='date'>$row[date_time]</p>
            </div>
            
          </div>
          </a>
        </div>";
        }
       

        ?>



      </div>





      </section>



  </main>


  <script>
    var allshow = document.getElementById("allshow");
  
</script>


<?php include 'footer.php'; ?>