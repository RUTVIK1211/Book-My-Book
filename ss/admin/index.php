   <?php 
  session_start();
?>
   <?php
    if (isset($_SESSION['adminemail'])) {
        ?>
   <script>
       window.location.href = "home.php";

   </script>
   <?php
    }
?>
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
           <div class="container-fluid page-body-wrapper full-page-wrapper">
               <div class="content-wrapper d-flex align-items-center auth">
                   <div class="row w-100">
                       <div class="col-lg-4 mx-auto">
                           <div class="auth-form-light text-left p-5">

                               <h2 class="font-weight-light">Login</h2>
                               <form class="pt-3" action="loginadmin.php">
                                   <div class="form-group">
                                       <input name="email" type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                                   </div>
                                   <div class="form-group">
                                       <input name="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                                   </div>
                                   <div class="mt-3">
                                       <button name="sbmt" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                                   </div>
                                   <div class="my-2 d-flex justify-content-between align-items-center">
                                       <div class="form-check">

                                       </div>
                                   </div>

                               </form>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- content-wrapper ends -->
           </div>
           <!-- page-body-wrapper ends -->
       </div>
       <!-- container-scroller -->
       <!-- plugins:js -->
       <script src="../../vendors/js/vendor.bundle.base.js"></script>
       <script src="../../vendors/js/vendor.bundle.addons.js"></script>
       <!-- endinject -->
       <!-- inject:js -->
       <script src="../../js/off-canvas.js"></script>
       <script src="../../js/misc.js"></script>
       <!-- endinject -->



   </body>


   </html>
