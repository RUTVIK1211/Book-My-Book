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

          $sql = "SELECT * FROM book WHERE b_id=$id";
          $result = mysqli_query($conn,$sql) or die("ERROR: 007"); 
          $row = mysqli_fetch_assoc($result);

       ?>
      <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Book</h4>
                  <form class="forms-sample" method="post" action="process/update_book.php">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">b_id</label>
                      <div class="col-sm-9">
                        <input type="text" name="b_id" class="form-control" id="exampleInputUsername2" placeholder="b_id" onclick="show()" readonly value="<?php echo $row['b_id']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">b_name</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['b_name']; ?>" class="form-control" name="b_name" id="exampleInputMobile" placeholder="b_name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">b_publisher</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['b_publisher']; ?>" class="form-control" name="b_publisher" id="exampleInputMobile" placeholder="b_publisher">
                      </div>
                    </div>
                   <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">b_edition</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['b_edition']; ?>" name="b_edition" class="form-control" id="exampleInputUsername2" placeholder="b_edition" >
                      </div>
                    </div>
                      <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">b_isbn</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $row['b_isbn']; ?>" name="b_isbn" class="form-control" id="exampleInputPassword2" placeholder="b_isbn">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">b_page</label>
                      <div class="col-sm-9">
                        <input type="number" value="<?php echo $row['b_page']; ?>"  class="form-control" id="exampleInputEmail2" name="b_page" placeholder="b_page">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">b_price</label>
                      <div class="col-sm-9">
                        <input type="number" value="<?php echo $row['b_price']; ?>" class="form-control"  name="b_price" id="exampleInputMobile" placeholder="b_price">
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">b_description</label>
                      <div class="col-sm-9">
                      <textarea class="form-control" placeholder="b_description" name="b_description" id="exampleInputMobile" rows="4"><?php echo $row['b_description']; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">b_category</label>
                      <div class="col-sm-9">
                      <select class="form-control" name="b_category" id="exampleInputPassword2">
                          <option  value="Competitive Exam">Competitive Exam</option>
                          <option  value="Stander 1 TO 12">Stander 1 TO 12</option>
                          <option  value="I.T. & Computer">I.T. & Computer</option>
                          <option  value="Engineering Books">Engineering Books</option>
                          <option  value="Other">Other</option>
                        </select>
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
