<?php
session_start();
require "include/Database.php";
$db = new Database();
if (isset($_REQUEST['sbmt'])) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    if ($email == "" || $password == "") {
        ?>
        <script>
            alert("Please enter the details");
            window.location.href = "index.php";
        </script>
        <?php
    } else {
        $selectUser = "SELECT * FROM `admin` WHERE `email`=? AND `password`=?";
        // prepare and bind
        $stmt = $db->db_connect()->prepare($selectUser);
        $stmt->bind_param("ss", $email, $password);
         $stmt->execute();
        $rowCount = $stmt->get_result();
        
    
        
        if ($rowCount->num_rows > 0) {
            
        while($row = $rowCount->fetch_assoc()){
     $id= $row['id'];
 }
            $_SESSION['adminemail'] = $email;
            $_SESSION['adminid'] = $id;
            ?>
            <script>
                alert("Login SuccessFully");
                window.location.href = "home.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Invalid Email and Password ");
                window.location.href = "index.php";
            </script>
            <?php
        }
    }
} else {
    ?>
    <script>
        window.location.href = "index.php";
    </script>
    <?php
}
?>