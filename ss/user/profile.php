   <?php 
   session_start();
   $conn = mysqli_connect("localhost","root","","story_database");
   $id = $_SESSION['userid'];
   $sql = "SELECT * FROM users WHERE id=$id";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="https://ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Heroic Features - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <?php include("include/menu.php"); ?>
    
    <html lang="en" class="h-100">

    <body class="h-100 bg-login">

        <?php include("include/menu.php"); ?>

        <!-- Page Content -->
            <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                
                  <div class="container" id="con"><br><br><br>
        <center><h1><b>Profile</b></h1></center>
        <center><img src="<?php echo $row['Img'];?>" height="200px" width="200px" style="border-radius:50%;  border-color: #1e1e27;" alt="Rutvik Image"/><br>
          <input type="file" name="img" placeholder="Choce image"></center>
    <br>
 <h5>
        <table class="table" style="margin-left: 300px;
                                    margin-right: 0px;
                                    border-right-width: 150px;
                                    padding-right: 50px;
                                    width: 650px; 
                                    ">
     
            <tr>
                <th>Name :</th>
                <td><?php 
                  $str = $row['Email'];
                  $arr = explode("@",$str);
                  echo $arr[0];
                 ?></td>
            </tr>
          
            <tr>
                <th>Email :</th>
                <td><?php echo $row['Email']; ?></td>
            </tr>
            <tr>
                <th>Phone :</th>
                <td><?php echo $row['Mobile']; ?></td>
            </tr>
            <tr>
                <th>DoB :</th>
                <td><?php echo $row['Dob'];?></td>
            </tr>
            <tr>
              <th>City :</th>
              <td><?php echo $row['City'] ?></td>
            </tr>
            <tr>
              <th>Address :</th>
              <td><?php echo $row['Address']; ?></td>
            </tr>
            <tr>
                <th>Story's Wrriten:</th>
                 <?php 

            $sql1 = "SELECT title FROM story WHERE users_id=$id";
            $result1 = mysqli_query($conn,$sql1);
            $counter = mysqli_num_rows($result1);
             if($counter==0)
             {
            ?>
                <td>Come On !! Man Write Something.</td>
            </tr>
            <?php 
              }
              else
              {
                $titles="";
                while ($row1 = mysqli_fetch_assoc($result1)) 
                { 

                  $titles .=strtoupper($row1['title']).".<br> "; 
                }
                echo "<td>$titles</td>";
              }
             ?>
       </table></h5>
            </div>
        </div>
     
    </div>

<?php include("include/menu.php"); ?>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>



</body>

</html>
