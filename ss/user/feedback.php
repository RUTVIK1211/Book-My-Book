<?php 
        require "include/session.php";
    ?>
    <!DOCTYPE html>
    <html lang="en" class="h-100">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Short Story</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/heroic-features.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="h-100" background="img/background_img_01b.jpg">
        <?php require "include/menu.php"; ?>
       <br>
        <div >
            <?php 

                if (isset($_SESSION['userid'])) 
                {
                    $conn= mysqli_connect("localhost","root","","story_database");
                    $id= $_SESSION['userid'];
                    $sql = "SELECT * FROM users WHERE id=$id";
                    $result = mysqli_query($conn,$sql);
                    $row=mysqli_fetch_assoc($result);
                }
             ?>
         <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-6 card p-5 h-auto mt-4">
                    <form action="feedback_process.php" method="post" enctype="multipart/form-data">
                        <h1>Feedback Form</h1>
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="font-size: 25px;"> Email</label>
                            <input type="email" value="<?php if(isset($_SESSION['userid'])){echo $row['Email'];} ?>" class="form-control" name="email" placeholder="Enter Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="font-size: 25px;"> Phone</label>
                            <input type="number" value="<?php if(isset($_SESSION['userid'])){echo $row['Mobile'];} ?>" class="form-control" name="phone" placeholder="Enter Your Phone" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="font-size: 25px;"> Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter the title of story" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="font-size: 25px;"> Write your thoughts here</label>
                            <textarea rows="5" class="form-control" name="feed" placeholder="write your responce  here" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div><br><br>
 <?php include("include/footer.php") ?>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>