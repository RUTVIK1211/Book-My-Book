<?php
session_start();
require "include/Database.php";
$db = new Database();
if (isset($_REQUEST['sbmt'])) {
    $email = $_REQUEST['userEmail'];
    $password = $_REQUEST['userPwd'];
    if ($email == "" || $password == "") {
        ?>
        <script>
            alert("Please enter the details");
            window.location.href = "index.php";
        </script>
        <?php
    } else {
        $selectUser = "SELECT * FROM `users` WHERE `Email`=? AND `Password`=?";
        // prepare and bind
        $stmt = $db->db_connect()->prepare($selectUser);
        $stmt->bind_param("ss", $email, $password);
         $stmt->execute();
        $rowCount = $stmt->get_result();
        
//        echo $rowCount;
        
        
        
        if ($rowCount->num_rows > 0) {
            
        while($row = $rowCount->fetch_assoc()){
     $id= $row['id'];
 }
            $_SESSION['username'] = $email;
            $_SESSION['userid'] = $id;
            ?>
            <script>
                alert("Login SuccessFully");
                window.location.href = "index.php";
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
        window.location.href = "registration.php";
    </script>
    <?php
}
?>