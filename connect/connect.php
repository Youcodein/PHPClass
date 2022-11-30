<?php
    $host = "localhost";
    $user = "ghkddbwls96";
    $pw = "HWhw5680!";
    $db = "ghkddbwls96";
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf8");
    if(mysqli_connect_errno()){
        echo "database connect false";
    } else {
        // echo "database connect true";
    }
?>