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
    <body class="h-100">

        <?php require "include/menu.php"; ?>

        <div id="home" class="section intro-page h-100 d-flex align-items-center">
            <div class="block content-1170 center-relative center-text">

                <h1 class="big-title text-uppercase" style="padding-top: 215px;">Short Stories</h1>
                <p class="title-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus officia suscipit magnam natus hic aperiam similique illo, voluptatem, consectetur inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum perspiciatis nobis dicta voluptatum accusamus possimus, non animi dolorem, numquam repellendus cumque distinctio sequi aut a.</p>
            </div>
        </div>

        <!-- Page Features -->
        <?php 
            require "include/Database.php";
            $db = new Database();
        
            $selectStory = "SELECT * FROM `story`";
        
        
            $result = mysqli_query($db->db_connect(),$selectStory);
        
            
        ?>

        <div class="container py-5">
            <div class="row text-center">
                <?php
                 
                    while($row = mysqli_fetch_row($result))
                    {
                        ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card ">

                        <img class="card-img-top img-fluid img-thumbnail" style=" height: 250px; widt:300px;"  src="upload/<?php echo $row[3]; ?>"alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $row[1]; ?></h4>
                            <p class="card-text story">
                                <?php echo $row[2]; ?>
                            </p>
                        </div>

                        <div class="card-footer">
                            <a href="storyread.php?id=<?php echo $row[0]; ?>" class="btn btn-primary">Read Full Story!</a>
                        </div>
                    </div>
                </div>


                <?php
                    }
                ?>



            </div>

            <!-- /.row -->

        </div>


        <!-- /.container -->


        <?php include("include/footer.php") ?>


        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>
