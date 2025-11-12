<?php

    session_start();

    $konek      = new mysqli('localhost', 'root', '', 'project_bimbel');

    $id_siswa   = $_SESSION["id_siswa"];

    $uname       = htmlspecialchars($_POST["uname"]);
    $nama_siswa  = htmlspecialchars($_POST["nama_siswa"]);
    $email       = htmlspecialchars($_POST["email"]);
    $notlp_siswa = htmlspecialchars($_POST["notlp_siswa"]);
    $jenisKel    = htmlspecialchars($_POST["jenisKel"]);
    $kelas       = htmlspecialchars($_POST["kelas"]);
    $sekolah     = htmlspecialchars($_POST["sekolah"]);
    $jurusan     = htmlspecialchars($_POST["jurusan"]);
    $nama_ortu   = htmlspecialchars($_POST["nama_ortu"]);
    $notlp_ortu  = htmlspecialchars($_POST["notlp_ortu"]);

    $query  = "UPDATE datadiri SET `uname`='$uname', `nama_siswa`='$nama_siswa', `email`='$email',
                `notlp_siswa`='$notlp_siswa', `jenisKel`='$jenisKel', `kelas`='$kelas', `sekolah`='$sekolah', 
                `jurusan`='$jurusan', `nama_ortu`='$nama_ortu', `notlp_ortu`='$notlp_ortu' WHERE id_siswa = $id_siswa;";

    $hasil  = mysqli_query($konek, $query);

    if ($hasil) {
        $_SESSION['uname'] = $uname;
        header("location:../dashboard-login.php");
        exit;
    } else {
        echo "<script>alert('failed to update profile')</script>";
    }

?>