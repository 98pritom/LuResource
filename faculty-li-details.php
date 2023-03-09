<?php include 'navBarIn.php'; ?>

    <?php

    $id = $_GET['id'];
    $datafetchquery = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$id'");
    $data = mysqli_fetch_array($datafetchquery);

    
    if($data['full_name'] !== null)
    {
      $name = $data['full_name'];
    } else{
      $name = "";
    }
   
    if(isset($data['designation']))
    {
      $role = $data['designation'];
    } else{
      $role = "";
    }

    if(isset($data['department']))
    {
      $department = $data['department'];
    } else{
      $department = "";
    }

    if(isset($data['image']))
    {
      $image = $data['image'];
    } else{
      $image = "";
    }

    if(isset($data['mbl_num']))
    {
      $cell_phone = $data['mbl_num'];
    } else{
      $cell_phone = "";
    }

    ?>

<style>
  .col-lg-4
  {
    margin-bottom: 2rem;
  }
  .card-block
  {
    height:10rem !important;
    width:100% !important;
    padding-left: 1rem;
 
  }
  .resource
  {
    text-decoration:none;
  }
  .card h3, h6{
    color:black;
  }
</style>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Email</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="sendmail.php" method="POST">
          
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" name='subject' id="subject" >
          </div>

          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" id="message" class="form-control"></textarea>
          </div>
          
          <div>
            <input type="text" value="<?php echo $data['email_id'] ?>" name='emailme' hidden>
          </div>
          <div>
            <input type="text" value="<?php echo $data['id'] ?>" name='id' hidden>
          </div>
          
          <button type="submit" class="btn btn-primary">Send Mail</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  
    <link rel="stylesheet" href="style/resource.css">
    

    <?php
    echo "<div class='container bg-light p-3' width='100%'>
    <div class='row'>
        <img class='img-thumbnail col-4 col-lg-2' src='$image'
            alt='' srcset=''>
        <div class='row d-flex justify-content-between col-8'>
            <div class='col-lg-6'>
                <h3>$name</h3>
                <p>$role</p>
                <p>$department</p>
            </div>
            <div class='col-lg-6'>
                <h3>Contact Information</h3>
                <p><strong>Cell Phone: </strong>0$cell_phone</p>
                <p><strong><a type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>Email Me</a></p>
                
            </div>
        </div>
    </div>
  
</div>"

   
    ?>

<div class="container mt-5">
      <!--   <div class="card card-block mb-2">
                    <h4 class="card-title">Card 1</h4>
                    <p class="card-text">Welcom to bootstrap card styles</p>
                    <a href="#" class="btn btn-primary">Submit</a>
                  </div>   -->
        <?php
       echo "<h3 class='text-dark mb-4'>$name Resources</h3>";
      ?>
      <hr>
      <div class="row">

      <?php
        
        $alldata = mysqli_query($conn, "SELECT * FROM `resource` WHERE teacher_name = '$name'");

        while ($row = mysqli_fetch_array($alldata)) {
        if($row['status'] == "Public")
        { 
        echo "
        <div class='col-lg-4 col-md-3 col-sm-6 allshow'>
        <a href='resourceshow.php?id=$row[id]' class='resource'>
          <div class='card card-block'>
            <img src='images/cloudcomp-2.png' alt=''>
            <h3 class='card-title m-1'>$row[topic]</h3>
            <h6 class='card-text m-1'>Course Code: $row[course_title]</h6>
            
          </div>
          </a>
        </div>";
        }
        }
       

        ?>



      </div>

      </div>
   
<?php include 'footer.php'; ?>