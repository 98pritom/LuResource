<?php include 'navBarIn.php'; ?>



<style>
  table{
    width:100%;
  }
  .main
  {
    width:80rem;
    margin:auto;
    overflow-x:auto !important;
  }
  table,tr,td,th
  {
    border:5px solid #FAF7F0;
    padding:0.75rem;
    text-align:center;
  }
  th{
    background-color: #004643;
    color: white;
  }
  tr:nth-child(even) {
        background-color: #BCEAD5;
      }
  tr:nth-child(odd) {
        background-color: #DEF5E5;
      }
  .jtable__search 
  {
    margin-bottom: 0.75rem;
    margin-top: 0.75rem;
  }
</style>






<main role="main" class="main">
<h2 class="text-center mt-3">View Notice</h2>

<div>

</div>

<table data-replace="jtable" id="example" aria-label="JS Datatable" data-locale="en" data-search="true">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Title</th>
                    <th>Post Date</th>
                    <th>Download</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                  
                    $alldata = mysqli_query($conn, "SELECT * FROM `notice` ORDER BY date_time DESC");
                    $cnt = 0;

                    while ($row = mysqli_fetch_array($alldata)) {
                      $date_new = date('F j, Y, g:i a', strtotime($row['date_time']));
                      $cnt++;
                        if (strlen($row['title']) > 20)
                            $new_string = substr($row['title'], 0, 40) . '';
                        else
                            $new_string = $row['title'];
                        echo "<tr>
                        <td>$cnt</td>
                        <td>$new_string</td>
                        <td>$date_new</td>
                        <td><a href='$row[image]' class='btn btn-success' download>Download</a></td>
                        </tr>";
                    }
                ?>
                </tr>
            </tbody>
        </table>
        <script src="js/datatable.min.js"></script>

</main>



  
<?php include 'footer.php'; ?>