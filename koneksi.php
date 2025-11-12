<?php

    $hostname   = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "project_bimbel";

    $konek    = new mysqli($hostname, $username, $password, $database);
    if ($konek->connect_error) 
    {
        die("koneksi gagal : " . mysqli_connect_error());
    } 
    else 
    {
        echo "koneksi berhasil";
    }

?>