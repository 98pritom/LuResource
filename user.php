<?php include 'navBarIn.php' ?>


<style>
.myimg img {
    width: 100px;
    height: 100px;
}
table,th,td,tr{
    border:5px solid white;
    text-align:center;
}
thead{
    background-color: #004643;
    color: white;
}
tr:nth-child(even) {
        background-color: #dee7e3;
      }
/* tr:nth-child(odd) {
        background-color: #DEF5E5;
      } */

.tablecontainer
{
    overflow-x:auto;
}

</style>

<div class="container mt-5 tablecontainer">
    <h1 class="text-center text-dark mb-3 mt-4">User</h1>
    <div>
        <input class="form-control mb-3" type="text" name="" id="myInput" placeholder="title...."
            onkeyup="searchFun()" />
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Full Name</th>
                  
                    <th>Department</th>
                    <th>Institution</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php


                $alldata = mysqli_query($conn, "SELECT * FROM `users` ORDER by id DESC");

                while ($row = mysqli_fetch_array($alldata)) {
                    echo "<tr>
                    <td>$row[id]</td>
                    <td>$row[full_name]</td>
        
                    <td>$row[department]</td>
                    <td>$row[inst]</td>
                    <td>$row[mbl_num]</td>
                    <td class='myimg'> <img src='$row[image]'></td>
                    <td>$row[role]</td>
                    <td> <a href='edituser.php?id=$row[id]' class='btn btn-success'>Edit</a>
                        <a href='deletuser.php?id=$row[id]' class='btn btn-danger'>Delete</a></td>
              
                       
                    </tr>";
                }

                ?>
            </tbody>
        </table>
    </div>



    <script>
    const searchFun = () => {
        let filter = document.getElementById("myInput").value.toUpperCase();

        let myTable = document.getElementById("myTable");

        let tr = myTable.getElementsByTagName("tr");

        for (var i = 0; i < tr.length; i++) {
            let td = tr[i].getElementsByTagName("td")[1];

            if (td) {
                let textvalue = td.textContent || td.innerHTML;
                if (textvalue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    };
    </script>
</div>
</div>