<?php 
      include_once 'connection.php';
      session_start();
      if (isset($_SESSION['admin'])) 
      {
      global $id;
      $id = $_GET['id'];
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
      <?php 

          $sql = "SELECT * FROM customer WHERE C_id=$id";
          $result = mysqli_query($conn,$sql) or die("ERROR: 007"); 
          $row = mysqli_fetch_assoc($result);

       ?>
      <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit User</h4>
                  <form class="forms-sample" method="post" action="process/update_user.php">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">C_id</label>
                      <div class="col-sm-9">
                        <input type="text" name="cid" class="form-control" id="exampleInputUsername2" placeholder="C_id" onclick="show()" readonly value="<?php echo $row['C_id']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">F_name</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['F_name']; ?>" class="form-control" name="fname" id="exampleInputMobile" placeholder="First Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">L_name</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['L_name']; ?>" class="form-control" name="lname" id="exampleInputMobile" placeholder="Last Name">
                      </div>
                    </div>
                   <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['Username']; ?>" name="uname" class="form-control" id="exampleInputUsername2" placeholder="Username" >
                      </div>
                    </div>
                      <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" value="<?php echo $row['Password']; ?>" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" value="<?php echo $row['Email']; ?>"  class="form-control" id="exampleInputEmail2" name="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['Phone']; ?>" class="form-control"  name="phone" id="exampleInputMobile" placeholder="Mobile number">
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Address</label>
                      <div class="col-sm-9">
                      <textarea class="form-control" placeholder="Address" name="address" id="exampleInputMobile" rows="4"><?php echo $row['Address']; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">City</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['City']; ?>" class="form-control" name="city" id="exampleInputMobile" placeholder="City">
                      </div>
                    </div><div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">State</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['State']; ?>" class="form-control" name="state" id="exampleInputMobile" placeholder="state">
                      </div>
                    </div><div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Pincode</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['Pincode']; ?>" class="form-control" name="pin" id="exampleInputMobile" placeholder="Pincode">
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
<script type="text/javascript">
  function show()
  {
    alert("Sorry ! You can't Edit this 😭😭")
  }
</script>
</html>
<?php 
  }
  else
  {
    header("location: login.php");
  }
 ?>
