<?php include('navBarIn.php') ?>


<?php


$id = $_GET['id'];

$datafetchqueryprofile = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$id'");
$dataprofile = mysqli_fetch_array($datafetchqueryprofile);

// $new_role = $_POST['status'];
$dataprofilerole= $dataprofile['role'];
$dataprofileid = $dataprofile['id'];
?>

<!-- <div class='mb-3'>
            <label for='city' class='form-label'>Role</label>
            <input type='text' name='role' value='$dataprofilerole' class='form-control' id='role'>
        </div> -->

<div class="container w-50 m-auto mt-5 mb-5 formedit">
    <?php
    echo "<form action='role_editAction.php?id=$dataprofileid' method='POST' enctype='multipart/form-data'>

        
        <label for='name' class='form-label'>Status</label>
                <select class='form-select' aria-label='Default select example' name='new_role'>
                    <option value='teacher'>Teacher</option>
                    <option value='student'>Student</option>
                </select>
                </div>


        <button type='submit' class='btn btn-primary'>Update Role</button>
    </form>";
    ?>
</div>




<?php include('footer.php') ?>






