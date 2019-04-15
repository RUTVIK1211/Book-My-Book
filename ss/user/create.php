   <?php 
   require "include/session.php";
?>
   <?php
    if (!isset($_SESSION['username'])) {
        ?>
        <script>
            window.location.href = "index.php";
        </script>
        <?php
    }
?>
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
                <div class="col-6 card p-5 h-auto mt-4">
                    <form action="story_insert.php" method="post" enctype="multipart/form-data">
                        <h1>Story Create</h1>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title of Story</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter the title of story" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Write Story here</label>
                            <textarea rows="5" class="form-control" name="story" placeholder="write your story here" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">SELECT Category</label>

                            <?php
                                include("include/Database.php");
                                $db = new Database();
                            
                            $selectCategory = "SELECT * FROM `category`";
                            
                            $result = mysqli_query($db->db_connect(),$selectCategory);
                            
                          
                            
                            ?>

                            <select class="form-control" name="category" required>
                                <?php
                                
                                while($row = mysqli_fetch_row($result))
                                {
                                    ?>
                                <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                <?php                                  
                                }   
                                    ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Select Cover Page</label>
                            <input type="file" class="form-control" name="coverImg" required /> </div>

                        <button type="submit" name="sbmt" class="btn btn-primary">Submit</button>
                    </form>
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
