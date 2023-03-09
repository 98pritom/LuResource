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
        <h1 class="add_notice">Add Resource</h1>
        <div class="jum">
        <form action="resourceAction.php" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="course_title" class="form-label">Course Title</label>
                    <input type="text" class="form-control" name="course_title" id="course_title" required>
                </div>

                <div class="mb-3">
                    <label for="topic" class="form-label">Topic</label>
                    <input type="text" class="form-control" name="topic" id="topic">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="pdf" class="form-label">PDF</label>
                    <input type="file" name="pdf" class="form-control" id="pdf">
                </div>
                <div class="mb-3">
                    <label for="video" class="form-label">VIDEO</label>
                    <input type="file" name="video" class="form-control" id="video">
                </div>
                
                <div class="mb-3">
                <label for="name" class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example" name="status">
                    <option value="Public">Public</option>
                    <option value="Private">Private</option>
                </select>
                </div>
                <button type="submit" class="btn submitbtn col-12">Submit</button>
        </form>
        </div>
    


    </div>

 

</main>

  
<?php include 'footer.php'; ?>