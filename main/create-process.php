<?php

    session_start();
    $konek  = new mysqli('localhost', 'root', '', 'project_bimbel');

    // connection check
    if ($kobek->connect_error) {
        die("connection failed: " . $konek->connect_error);
    }

    // ambil id_siswa dari session
    $id_siswa   = $_SESSION["id_siswa"];

    // menangkap data yang dikirim dari form
    









?>