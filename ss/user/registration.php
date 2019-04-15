    <!DOCTYPE html>
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
                    <h1>SIGN UP</h1>
                    <form action="registration_insert.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="Email" class="form-control" name="userEmail" placeholder="Enter E mail" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="Password" class="form-control" name="userPwd" placeholder="Password" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Mobile</label>
                            <input type="text" class="form-control" name="userMobile" placeholder="Mobile" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">City</label>
                            <input type="text" class="form-control" name="city" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">DOB</label>
                            <input type="date" required class="form-control" name="dob" placeholder="Mobile" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <textarea class="form-control" rows="5" cols="25" name="address" placeholder="Enter Your Address" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" >Img</label>
                            <input type="file" name="image" required>
                        </div>
                        <button type="submit" name="sbmt" class="btn btn-primary">Submit</button>
                    </form>                   
                </div>
            </div>
        </div>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
