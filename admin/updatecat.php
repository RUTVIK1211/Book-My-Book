    <!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
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


        <div class="card-body card-block col-md-12">

            <form name="frm1" method="post" action="add_insertdata.php">
                <div class="row form-group">
                    <div class="col-8">

                        <?php
                        
                        $id = $_GET['id'];
                        $name = $_GET['name'];
                        
                        ?>

                        <div class="form-group"><label for="user" class=" form-control-label"> OLD User</label><input type="text" id="user name" placeholder="Enter your name" name="txtname" value="<?php echo $name; ?>" class="form-control" disabled></div>


                    </div>


                </div>
            </form>
        </div>

        <div class="card-body card-block col-md-12">

            <form name="frm1" method="post" action="view_updatedata.php">
                <div class="row form-group">
                    <div class="col-8">
                        <div class="form-group"><label for="city" class=" form-control-label"> NEW User</label>
                            <input type="text" id="user name" placeholder="Enter your Name" name="newname" class="form-control"></div>

                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <input type="submit" class="btn btn-primary btn-sm" value="submit" name="btnsubmit">
                    </div>

                </div>
            </form>
        </div>

    </div>





        <!-- main-panel ends -->
    </div>  
    <!-- page-body-wrapper ends -->

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
