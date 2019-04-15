<?php 
   require "include/session.php";
?>
   <?php
    if (!isset($_SESSION['username'])) {
        ?>
        <script>
            window.location.href = "login.php";
        </script>
        <?php
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

    <?php include("include/menu.php"); ?>


    <?php
    
    $id = $_GET['id'];
    
    include("include/Database.php");
    $db = new Database();
    
    $selectStory = "SELECT * FROM `story` WHERE `id`=$id ";
    
    $storyResult = mysqli_query($db->db_connect(),$selectStory);
    
    
    
    ?>
    <!-- Page Content -->
    <div class="container py-5">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <?php
                while($row = mysqli_fetch_row($storyResult))
{
?>

                <!-- Title -->
                <h1 class="mt-4"><?php echo $row[1]; ?></h1>

                <!-- Author -->
                <p class="lead">
                    by
                    <a href="#">
                        <?php
                            
        $selectUser = "SELECT * FROM `users` WHERE `id`='$row[5]'";
        $resultUser = mysqli_query($db->db_connect(),$selectUser);

         while($row1 = mysqli_fetch_row($resultUser)){
                echo $row1[1];
         }
                        ?>
                    </a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p>Posted on <?php 
                echo date("M d, Y", strtotime($row[4]));
                    ?>
                </p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="upload/<?php echo $row[3]; ?>" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $row[2]; ?></p>


                <?php    
}?>

              
              
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
