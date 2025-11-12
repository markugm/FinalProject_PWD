<?php
session_start();
$konek = new mysqli('localhost', 'root', '', 'project_bimbel');

if (!$konek) {
    die("Connection failed: " . $konek->connect_error);
}

if (!isset($_SESSION['uname'])) {
    header('location: login.php');
    exit();
}

$uname = $_SESSION['uname'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ulasan = $_POST['ulasan'];

    // Ambil ID siswa berdasarkan uname dari session
    $stmt = $konek->prepare("SELECT id_siswa FROM datadiri WHERE uname = ?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $stmt->bind_result($id_siswa);
    $stmt->fetch();
    $stmt->close();

    if ($id_siswa && !empty($ulasan)) {
        // Masukkan ulasan ke database
        $stmt = $konek->prepare("INSERT INTO ulasan (id_siswa, ulasan) VALUES (?, ?)");
        $stmt->bind_param("is", $id_siswa, $ulasan);
        if ($stmt->execute()) {
            // Redirect kembali ke halaman ulasan setelah posting
            header('Location: /ProjekAkhir/ulasan-login.php');
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error: Missing user or review content.";
    }
} else {
    header('Location: /ProjekAkhir/ulasan-login.php');
}
$konek->close();
?>
