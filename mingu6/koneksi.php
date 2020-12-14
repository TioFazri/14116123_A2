<?php
    $host = "localhost";
    $user = "root";
    $password = "root";
    $db = "belajar_ajax";

    $kon = mysqli_connect ($host, $user, $password, $db);
    if (!$kon) {
        die("koneksi error:".mysqli_connect_error());
    } 
?>