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
     <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-description">
                    Basic form 
                  </p>
                  <form class="forms-sample" name="frm1" method="post" action="add_insertdata.php" >
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Category Name</label>
                      <input type="text" name="txtname" class="form-control" id="exampleInputUsername1" placeholder="Type a category">
                    </div>
                    
                    <button type="submit" name="btnsubmit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light" type="reset">Cancel</button>
                  </form>
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
