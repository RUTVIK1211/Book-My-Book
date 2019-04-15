   <?php 
   require "include/session.php";
?>
   <?php
    if (isset($_SESSION['username'])) {
        ?>
        <script>
            window.location.href = "index.php";
        </script>
        <?php
    }
?><!DOCTYPE html>
    <html lang="en" class="h-100">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Heroic Features - Start Bootstrap Template</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/heroic-features.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body class="h-100 bg-login">

        <?php include("include/menu.php"); ?>

        <!-- Page Content -->
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-6 card p-5 h-auto">
                    <h1>SIGN IN</h1>
                    <form action="loginuser.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="Email" class="form-control" name="userEmail" placeholder="Enter E mail" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="Password" class="form-control" name="userPwd" placeholder="Password" required>
                        </div>

                  
                        <button type="submit" name="sbmt" class="btn btn-primary">Submit</button>
                        
                    </form>
                        <a href="registration.php" class="py-3">New User...?</a>
                </div>
            </div>
        </div>


                     
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>
