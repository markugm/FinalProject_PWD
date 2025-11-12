<?php
session_start();
$konek = new mysqli('localhost', 'root', '', 'project_bimbel');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_ulasan = $_POST['id_ulasan'];
    $uname = $_SESSION['uname'];

    // Pastikan uname sudah ter-set
    if (isset($uname)) {
        // Siapkan statement untuk memastikan ulasan hanya bisa dihapus oleh pemiliknya
        $stmt = $konek->prepare("SELECT datadiri.id_siswa FROM ulasan JOIN datadiri ON ulasan.id_siswa = datadiri.id_siswa WHERE ulasan.id_ulasan = ? AND datadiri.uname = ?");
        $stmt->bind_param("is", $id_ulasan, $uname);
        $stmt->execute();
        $stmt->store_result();

        // Periksa apakah ulasan ditemukan dan pemiliknya sesuai dengan user yang login
        if ($stmt->num_rows > 0) {
            $stmt->close();
            // Siapkan statement untuk menghapus ulasan
            $stmt = $konek->prepare("DELETE FROM ulasan WHERE id_ulasan = ?");
            $stmt->bind_param("i", $id_ulasan);

            // Eksekusi statement dan periksa apakah berhasil
            if ($stmt->execute()) {
                header('Location: /ProjekAkhir/ulasan-login.php');
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "Anda tidak memiliki izin untuk menghapus ulasan ini.";
        }

        $stmt->close();
    } else {
        echo "User tidak ditemukan.";
    }
}

$konek->close();
?>
