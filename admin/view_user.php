<?php 
      include_once 'connection.php';
      session_start();
      if (isset($_SESSION['admin'])) 
      {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
 
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

      <?php
        include("include/header.php");
      ?>
    <!--partial-->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
        <?php        
            include("include/menu.php");
        ?>
      <!-- partial -->
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card" >
                <div class="card-body">
                   <h4 class="card-title">User Table</h4>
                  <table class="table table-responsive table-{color}" >
                      <tr class="table-primary">
                        <th>
                          C_id
                        </th>
                        <th>
                         Name
                        </th>
                        <th>
                          Username
                        </th>
                        <th>
                          Password
                        </th>
                        <th>
                          Address
                        </th>
                        <th>
                          City
                        </th>
                        <th>
                          Phone
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Edit  |   Delete
                        </th>
                      </tr>
                       <tbody>
                   <?php 
                        $sql = "SELECT * FROM customer";
                        $result= mysqli_query($conn,$sql) or die("Error in query");
                        while ($row = mysqli_fetch_array($result)) 
                        {
                          # fetching the records from the table..
                          echo "<tr class=''>";
                          echo"<td>$row[0]</td>
                                <td>$row[1]".$row[2]."</td>      
                                <td>$row[3]</td>
                                <td>$row[4]</td>
                                <td>$row[5]</td>
                                <td>$row[6]</td>
                                <td>$row[9]</td>
                                <td>$row[10]</td>";
                                echo "<td><a href='edit.php?id=$row[0]'><img src='images/edit.png' style='height:20px; width:20px' >Edit | <a href='process/delete_user.php?id=$row[0]'><img src='images/delete.png' style='height:20px; width:20px'>Delete </td>";
                          echo "</tr>";
                        }
                       ?>
                        </tbody>
                  </table>
                </div>
              </div>
            </div>
        
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
<?php 
  }
  else
  {
    header("location: login.php");
  }
 ?>
