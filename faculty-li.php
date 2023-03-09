<?php include 'navBarIn.php'; ?>
<link rel="stylesheet" href="style/card.css">

<style>

  
  .card{
    margin-bottom: 20rem !important;
  }


</style>


<?php

if(!isset($_SESSION['email']))
{
      echo "<script>alert('Login required')</script>";
      echo "<script>location.href='index.php'</script>";
}


?>


<div class="wrapper">
    <div class="container">
      <h1 class="title mb-5">Faculty Member</h1>
      <div class="inner-wrapper">
      <?php
        $alldata = mysqli_query($conn, "SELECT * FROM `users`");
        while ($row = mysqli_fetch_array($alldata)) {
          if($row['role'] == 'teacher')
          {
            echo "<div class='card me-4'>
              <div class='inner-card'>
                <div class='img-wrapper'>
                <img src='$row[image]' alt=''>
                </div>
                <div class='content'>
                <h1>$row[full_name]</h1>
                <p>$row[designation]</p>
                <p>$row[email_id]</p>
                </div>
                <div class='btn-wrapper'>
                <a href='faculty-li-details.php?id=$row[id]' class='btn btn-info' >View</a>
                </div>
              </div>
            </div>";
          }
           

        }

        ?>
        
        
      </div>
    </div>
  </div>

  


<script src="js/nav.js"></script>

   
<?php include 'footer.php'; ?>