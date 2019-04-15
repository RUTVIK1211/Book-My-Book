
<?php
session_start();
require "include/Database.php";

$db = new Database();

if (isset($_REQUEST['sbmt'])) {
    
    $title       = $_REQUEST['title'];
    $story = $_REQUEST['story'];
    $category      = $_REQUEST['category'];
   
    $name        = $_FILES['coverImg']['name'];
    $uploads_dir = realpath(dirname(__FILE__)) . "/upload";
    $path_info   = pathinfo($_FILES['coverImg']['name']);
    $path_info['extension']; // "bill"
    $name = time() . uniqid(rand()) . "." . $path_info['extension'];
    $id = $_SESSION['userid'];
    
    if ($title == "" || $story == "") {
       				?>

<script>
    alert("Please fill details");
    window.location.href = "create.php";

</script>

<?php
    } else {
        
        $date = date("Y-m-d");
        $userID = 7;
        
        if (move_uploaded_file($_FILES['coverImg']['tmp_name'], "$uploads_dir/$name")) {
            
            $insertQuery = "INSERT INTO `story`(`title`, `story`, `image`, `date`, `users_id`, `category_id`) VALUES ('$title','$story','$name','$date','$id','$category')";
             
            $result = mysqli_query($db->db_connect(), $insertQuery);
          
            if ($result > 0) {      
            ?>
                <script>
                    alert("Inserted successfully");
                    window.location.href = "index.php";
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("Not Inserted");
                    window.location.href = "create.php";
                </script>
            <?php
            }
            
        } else {
            //        print "Upload failed!";
        }
      
        
    }
    
    
} else {
    echo "NOT CLICKED";
    header("Location: index.php");
}

?>
