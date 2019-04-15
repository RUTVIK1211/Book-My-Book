    <!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Short stories</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
    
    <?php

    require "include/Database.php";
    $db = new Database();
    
?>

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php"><img src="images/logo.png"  width="80px">
          </a>
  
        </div>
        <?php 
        include("include/header.php");
            
        ?>
      
      </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
     
        <!-- partial:partials/_sidebar.html -->
      <?php 
        
        include("include/menu.php");
         ?>
        <!-- partial -->
   <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                  
                  <table class="table table-striped">
                    <thead>
                      <tr>
                          <th>No</th>
                        <th>
                          NAME
                        </th>
                        <th>
                          UPDATE
                        </th>
                        <th>
                          DELETE
                        </th>
                       
                      </tr>
                    </thead>
                    <tbody>
                        
                      <!--start php select category-->
                                <?php
                            
                            
              $selectCategory = "SELECT * FROM `category`";
                            
            $result = mysqli_query($db->db_connect(),$selectCategory);
            
                            while($row=mysqli_fetch_row($result))
                            {
                                    ?>

                                    <tr>

                                        <td> <?php echo $row[0]; ?></td>
                                        <td> <?php echo $row[1];?></td>
                                        <td>
<a class="btn btn-success" href="updatecat.php?id=<?php echo $row[0];?>&name=<?php echo $row[1]; ?>">UPDATE</a>
                                        </td>
                                        <td>
<a class="btn btn-danger" href="deletecat.php?id=<?php echo $row[0];?>">DELETE</a></td>
                                     </tr>
                            <?php                       
                                  }
                            ?>
                                    <!-- end php select category-->


                      
                      
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

  <!-   - plugins:js -->
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
