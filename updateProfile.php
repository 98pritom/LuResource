<?php include 'navBarIn.php'; ?>



  <h1 class="text-center">Update Profile</h1>
  <div class="container">
    <form action='updateAction.php' class="form-design mx-auto" method="POST" id="form" enctype="multipart/form-data">

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


<?php include 'footer.php'; ?>