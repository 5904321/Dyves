<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    include 'block.php';
    if(isset($_POST['uitloggen'])){
        $_SESSION["nu"] = "";
        $_SESSION["wachtwoordCheck"] = "false";
        $_SESSION["bezoek"] = "";
        $_SESSION['Waar'] = "hoofdmenu";
        reloadPost();
    }
 ?>
