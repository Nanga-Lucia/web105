<?php
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "team_project";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if($conn->connect_error){
        die('Cennection failed '.$conn->connect_error);
    }
?>