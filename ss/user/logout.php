<?php
session_start();
if (isset($_SESSION['username'])) {
    unset($_SESSION["username"]);
    unset($_SESSION['userid']);
    unset($_SESSION['counter']);
    ?>
    <script>
        window.location.href = "index.php";
    </script>
    <?php
}
?>