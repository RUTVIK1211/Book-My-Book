
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
              <div class="card">
                <div class="card-body">
                  
                  
                  <table class="table table-striped">
                    <thead>
                      <tr>
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
                      <tr>
                       <td>
                          Herman Beck
                        </td>
                        <td>
                          <a href="update.php" class="btn btn-success btn-fw">UPDATE</a>                        
                        </td>
                          <td>
                          <button type="button" class="btn btn-danger btn-fw">DELETE</button>
                          </td>
                        
                        
                      </tr>
                      

                      
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
