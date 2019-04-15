<?php 
  session_start();
  if (isset($_SESSION['admin'])) {
  
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
<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-description">
                    Add Book in Table
                  </p>
                  <form class="forms-sample" enctype="multipart/form-data" method="post">
                    <div class="form-group row">
                      <label for=" exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="exampleInputUsername2" placeholder="Book Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for=" exampleInputUsername2" class="col-sm-3 col-form-label">Publisher</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="publisher" id="exampleInputUsername2" placeholder="Publisher">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Edition</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" name="edition" id="exampleInputEmail2" placeholder="Edition">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">ISBN</label>
                      <div class="col-sm-9">
                        <input type="number" name="isbn" class="form-control" id="exampleInputEmail2" placeholder="Isbn">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Page</label>
                      <div class="col-sm-9">
                        <input type="number"  name="page" class="form-control" id="exampleInputMobile" placeholder="Pages">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Price</label>
                      <div class="col-sm-9">
                        <input type="number" name="price" class="form-control" id="exampleInputPassword2" placeholder="Price">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for=" exampleInputUsername2" class="col-sm-3 col-form-label">Img</label>
                      <div class="col-sm-9">
                       <input type="file" class="file-upload-browse btn btn-gradient-primary"  name="img">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for=" exampleInputUsername2" class="col-sm-3 col-form-label">Category</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="category" id="exampleInputPassword2">
                          <option  value="Competitive Exam">Competitive Exam</option>
                          <option  value="Stander 1 TO 12">Stander 1 TO 12</option>
                          <option  value="I.T. & Computer">I.T. & Computer</option>
                          <option  value="Engineering Books">Engineering Books</option>
                          <option  value="Other">Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for=" exampleInputUsername2" class="col-sm-3 col-form-label">Author</label>
                      <div class="col-sm-9">
                        <input type="text" name="author" class="form-control" id="exampleInputPassword2" placeholder="Author">
                      </div>
                    </div>
                      <div class="form-group row">
                      <label for=" exampleInputUsername2" class="col-sm-3 col-form-label">Description</label>
                      <div class="col-sm-9">
                       <textarea class="form-control" name="description" id="exampleInputUsername2" placeholder="Description" rows="5"></textarea>
                      </div>
                    </div>
                    <button type="submit"  name="submit" class="btn btn-gradient-primary mr-2">Submit</button>
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
<?php 
include_once 'connection.php';
if (isset($_POST['submit'])) 
  {
    $name =$_POST['name'];
    $newname =trim($name);
    $publisher = $_POST['publisher'];
    $edition = $_POST['edition'];
    $isbn = $_POST['isbn'];
    $page = $_POST['page'];
    $price = $_POST['price'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $path = '';

    $img=$_FILES['img'];
    $fname = $img['name'];
    $ftype = $img['type'];
    $ftname = $img['tmp_name'];
    $ferror = $img['error'];
    $fsize = $img['size'];
    $fexten = explode(".",$fname);
    $faexten = strtolower(end($fexten));
    $allow = array('jpg','jpeg','png');

    if (in_array($faexten,$allow))
      {
      if ($ferror === 0)
      {
        if ($fsize < 5000000)
        {
            $fnewname=$newname.".".$faexten;
            $store = "../book/".trim($fnewname);
            $path ="book/".trim($fnewname);
            move_uploaded_file($ftname,$store);
        }
        else
        {
            echo "<script>alert('File Size is must be less than 5mb')</script>";
        }
      }
      else
      {
          echo "<script>alert('Error While Uploading an image..')</script>";
      }
    }
    else
    {
      echo "<script>alert('You can't upload this $ftype')</script>";
    }
    
    
     $sql ="INSERT INTO book(b_id,b_name,b_publisher,b_edition,b_isbn,b_page,b_price,b_img,b_author,b_description,b_category) VALUES (0,'$name','$publisher','$edition','$isbn',$page,$price,'$path','$author','$description','$category')";

    
    $result = mysqli_query($conn,$sql);

    if ($result > 0) 
    {
      echo "<script>alert('Book Insert Successfull')</script>";
    }
    
    else 
    {
      echo "<script>alert('Somthing Went Wrong')</script>";
    }
  }
 ?>
</html>
<?php 
}
else
{
  header("location: login.php");
}?>
