<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$konek = new mysqli('localhost', 'root', '', 'project_bimbel');

// Check for connection errors
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}

// ambil data dari form login
$uname    = htmlspecialchars($_POST['uname']);
$password = htmlspecialchars($_POST['password']);

// Prepare and bind
$stmt = $konek->prepare("SELECT * FROM `datadiri` WHERE uname = ?");
$stmt->bind_param("s", $uname);

// Execute statement
$stmt->execute();

// Get result
$result = $stmt->get_result();

// Fetch data
$dataAdmin = $result->fetch_assoc();

if ($result->num_rows === 1) {
    // Login berhasil
    if (password_verify($password, $dataAdmin["password"])) {
        // Buat session
        $_SESSION['uname']     = $dataAdmin['uname'];
        $_SESSION['id_siswa']  = $dataAdmin['id_siswa'];
        $_SESSION['pfp']       = $dataAdmin['pfp'];
        header('location: /ProjekAkhir/home-login.php');
        exit;
    } else {
        // Password salah
        header("location: /ProjekAkhir/login.php?pesan=gagal");
        exit;
    }
} else {
    // Username tidak ditemukan
    header("location: /ProjekAkhir/login.php?pesan=gagal");
    exit;
}

// Close statement and connection
$stmt->close();
$konek->close();
?>
