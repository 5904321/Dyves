<?php
    include 'block.php';

    $dbServername = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'dyves';

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if (!$conn) {
        $errNo = mysqli_connect_errno();
        $errStr = mysqli_connect_error();
        die("Database connection failed (".$errNo."): ".htmlspecialchars($errStr).".\nPlease create the database 'dyves' or update php/connect.php with the correct database name and credentials.");
    }


?>
