<?php include 'navBarIn.php'; ?>

<?php


if (!isset($_SESSION['email'])) {
  echo "<script>alert('Please signin to enter this page');</script>";
  echo "<script>window.location.href='signin.php ? user_not_loggedin';</script>";
}

?>



<link rel="stylesheet" href="style/notice.css">
  <main>
    

    <div class="container mt-5">
        <h1 class="add_notice">Add Notice</h1>
        <div class="jum">
        <form action="noticeAction.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <!-- <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div> -->
                <div class="mb-3">
                    <label for="image" class="form-label">File</label>
                    <input type="file" name="image" class="form-control" id="name" required>
                </div>
                
                <button type="submit" class="btn submitbtn col-12">Upload</button>
        </form>
        </div>
    


    </div>

 

</main>

  
<?php include 'footer.php'; ?>