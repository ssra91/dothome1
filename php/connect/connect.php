<?php
    $host = "localhost";
    $user = "ssra10";
    $pw = "wnddkdeo10!";
    $dbName = "ssra10";
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect -> set_charset("utf8");
    
    if(mysqli_connect_errno()){
        echo "database connect false";
    } else {
//        echo "database connect true";
    }
?>