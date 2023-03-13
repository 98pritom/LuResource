<?php include 'navBarIn.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php


if (!isset($_SESSION['email'])) {
  echo "<script>alert('Please signin to enter this page');</script>";
  echo "<script>window.location.href='signin.php ? user_not_loggedin';</script>";
}

?>

<link rel="stylesheet" href="style/resource.css">
<!-- <link rel="stylesheet" href="https://kit.fontawesome.com/73728a3c01.css" crossorigin="anonymous"> -->
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
        
          $alldata = mysqli_query($conn, "SELECT DISTINCT `course_title` FROM `resource` ORDER BY id DESC");

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
        
        $alldata = mysqli_query($conn, "SELECT * FROM `resource` ORDER BY id DESC");

        while ($row = mysqli_fetch_array($alldata)) {
          $date_new = date('F j, Y, g:i a', strtotime($row['date_time']));
        if($row['status'] == "Public")
        { 
          echo "<div class='col-lg-4'>
            <a href='resourceshow.php?id=$row[id]' class='resource'>
              <div class='card card-block'>
                <h3 class='card-title m-1'>$row[topic]</h3>
                <h6 class='card-text m-1'>Course Code: $row[course_title]</h6>
                <h6 class='card-text m-1'>$row[description]</h6>
                <div class='teachupload ms-1 mt-5'>
                  <h6>Uploaded By <span class='fw-bolder'>$row[teacher_name]</span></h6>
                  <p class='date'>$date_new</p>
                   <p><a href='fav.php?id=$row[id]' class='resource add-fav'>Favourite<i class='fa-solid fa-heart'></i></a></p> 
                     
                </div>
                
              </div>
              </a>
            </div>";
        }
        
        }
       

        ?>



      </div>

      </div>



      </section>
      <script src="https://kit.fontawesome.com/73728a3c01.js" crossorigin="anonymous"></script>



  </main>


  <script>
    var allshow = document.getElementById("allshow");
  
</script>


<?php include 'footer.php'; ?>