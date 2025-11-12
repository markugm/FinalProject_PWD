<?php

$konek  = new mysqli('localhost', 'root', '', 'project_bimbel');

// ngambil data
$uname       = htmlspecialchars($_POST["uname"]);
$nama_siswa  = htmlspecialchars($_POST["nama_siswa"]);
$email       = htmlspecialchars($_POST["email"]);
$notlp_siswa = htmlspecialchars($_POST["notlp_siswa"]);
$jenisKel    = htmlspecialchars($_POST["jenisKel"]);
$kelas       = htmlspecialchars($_POST["kelas"]);
$sekolah     = htmlspecialchars($_POST["sekolah"]);
$jurusan     = htmlspecialchars($_POST["jurusan"]);
$password    = ($_POST["password"]);
$nama_ortu   = htmlspecialchars($_POST["nama_ortu"]);
$notlp_ortu  = htmlspecialchars($_POST["notlp_ortu"]);

// cek username sudah ada atau belum
$result = mysqli_query($konek, "SELECT uname FROM datadiri WHERE uname = '$uname'");
if (mysqli_fetch_assoc($result)) {
    header('location:login.php?pesan=terdaftar');
}

// enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

// tambah userbaru ke database
$query      = "INSERT INTO `datadiri` (`id_siswa`, `uname`, `nama_siswa`, `email`, `notlp_siswa`, `jenisKel`, `kelas`, `sekolah`, 
                                     `jurusan`, `password`, `nama_ortu`, `notlp_ortu`) 
               VALUES (NULL, '$uname', '$nama_siswa', '$email', '$notlp_siswa', '$jenisKel', '$kelas', 
                       '$sekolah', '$jurusan', '$password', '$nama_ortu', '$notlp_ortu');";
$data       = mysqli_query($konek, $query);

// kirim ke login
if ($data == true) {
    header('location:../login.php?pesan=berhasil');
} else {
    header('location:../login.php?pesan=gagal');
}
