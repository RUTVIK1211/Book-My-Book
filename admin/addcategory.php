
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
<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-description">
                    Edit user Information
                  </p>
                  <form class="forms-sample">
                    <div class="form-group row">
                      <label for=" exampleInputUsername2" class="col-sm-3 col-form-label">C_id</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="C_id" id="exampleInputUsername2" placeholder="C_id" readonly="true">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for=" exampleInputUsername2" class="col-sm-3 col-form-label">F_name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="fname" id="exampleInputUsername2" placeholder="First name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for=" exampleInputUsername2" class="col-sm-3 col-form-label">L_name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="lname" id="exampleInputUsername2" placeholder="Last name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Phone</label>
                      <div class="col-sm-9">
                        <input type="number"  name="phone" class="form-control" id="exampleInputMobile" placeholder="Phone number">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="text" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for=" exampleInputUsername2" class="col-sm-3 col-form-label">Address</label>
                      <div class="col-sm-9">
                       <textarea class="form-control" name="address" id="exampleInputUsername2" placeholder="Address" rows="5"></textarea>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
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
