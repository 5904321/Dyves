<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    $nuOn = isset($_SESSION["nu"]) ? $_SESSION["nu"] : '';
    $gebruikersnaam2_ = '';
    $profielfoto2_ = '';
    $gender2_ = 0;
    $sql = "SELECT Gebruikersnaam,ProfielFoto,Man FROM `notusers` WHERE UNIQ = '$nuOn';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $gebruikersnaam2_ = $row['Gebruikersnaam'];
            $profielfoto2_ = $row['ProfielFoto'];
            $gender2_ = $row['Man'];
        }
    }
    if (empty((string)$profielfoto2_) || strlen((string)$profielfoto2_) <= 1){
        $liveFoto2 = "g".$gender2_.".jpg";
    }
    else{
        $liveFoto2 = $gebruikersnaam2_.$profielfoto2_;
    }

 ?>
