  
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
                    Add user Into System...
                  </p>
                  <form class="forms-sample" action="process/add_user.php" method="post">
                    <div class="form-group row">
                    </div>
                    <div class="form-group row">
                      <label for=" exampleInputUsername2" class="col-sm-3 col-form-label">F_name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="fname" id="exampleInputUsername2" placeholder="First name" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for=" exampleInputUsername2" class="col-sm-3 col-form-label">L_name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="lname" id="exampleInputUsername2" placeholder="Last name" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Phone</label>
                      <div class="col-sm-9">
                        <input type="number"  name="phone" class="form-control" id="exampleInputMobile" placeholder="Phone number" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Username</label>
                      <div class="col-sm-9">
                        <input type="text"  name="uname" class="form-control" id="exampleInputMobile" placeholder="Enter Username" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">  
                        <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for=" exampleInputUsername2" class="col-sm-3 col-form-label">Address</label>
                      <div class="col-sm-9">
                       <textarea class="form-control" name="address" id="exampleInputUsername2" placeholder="Address" rows="5" required></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">City</label>
                      <div class="col-sm-9">
                        <input type="text"  name="city" class="form-control" id="exampleInputMobile" placeholder="Enter City" required>
                      </div>
                    </div>
                      <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">State</label>
                      <div class="col-sm-9">
                        <input type="text"  name="state" class="form-control" id="exampleInputMobile" placeholder="Enter State" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Pin-Code</label>
                      <div class="col-sm-9">
                        <input type="number"  name="pin" class="form-control" id="exampleInputMobile" placeholder="Enter pin-Code" required>
                      </div>
                    </div>
                      <div class="form-group row">
                      <label for=" exampleInputUsername2" class="col-sm-3 col-form-label">DOB</label>
                      <div class="col-sm-9">
                       <input type="date"  name="dob" class="form-control" id="exampleInputUsername2" placeholder="Date Of Birth" required>
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
