<?php
session_start();
$konek = new mysqli('localhost', 'root', '', 'project_bimbel');

$uname = $_SESSION['uname'];

// Query untuk mengambil data pengguna
$query = "SELECT * FROM datadiri WHERE uname='$uname'";
$result = $konek->query($query);

// Pastikan pengguna ditemukan
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    // Jika pengguna tidak ditemukan, redirect ke halaman login
    header("location: login.php?pesan=gagal");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/ProjekAkhir/img/favicon.ico" type="image/x-icon">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/ProjekAkhir/css/buatstyle.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

   <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            margin-top: 50px;
        }

        .profile-menu {
            display: flex;
            flex-direction: column;
        }

        .profile-menu a {
            margin-bottom: 10px;
        }

        .profile-pic {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            align-items: center;
        }

        .profile-pic img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-left: 10px;
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }

        .card-body label {
            font-weight: bold;
        }

        .card-body .col-12 {
            margin-bottom: 10px;
        }
    </style>
</head>

<body class="wave-2">
    <div class="profile-pic p-5">
        <span>@<?php echo htmlspecialchars($user['uname']); ?></span>
        <img src="/ProjekAkhir/img/pfp_dummy.jpg" alt="Foto Profil">
    </div>
    
    <div class="container">
        <h1 class="text-center fw-bold mb-4">Dashboard</h1>
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="profile-menu">
                    <img src="/ProjekAkhir/img/logo_horizontal.png" class="mb-4" alt="" width="90%">
                    <a class="text-decoration-none" href="home-login.php"><button class="btn btn-light w-100 ">Home</button></a>
                    <a class="text-decoration-none" href="edit-profile.php"><button class="btn btn-light w-100">Edit Profile</button></a>
                    <a class="text-decoration-none" href="./main/logout.php"><button class="btn btn-danger w-100">Logout</button></a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-warning mb-3">
                            <div class="card-header"><strong>Detail Profile</strong></div>
                            <div class="card-body">
                                <label>Username</label>
                                <div class="col-12">
                                    <input type="text" class="form-control text-secondary" value="<?php echo htmlspecialchars($user['uname']); ?>" disabled>
                                </div>
                                <label>Nama Lengkap</label>
                                <div class="col-12">
                                    <input type="text" class="form-control text-secondary" value="<?php echo htmlspecialchars($user['nama_siswa']); ?>" disabled>
                                </div>
                                <label>Email</label>
                                <div class="col-12">
                                    <input type="text" class="form-control text-secondary" value="<?php echo htmlspecialchars($user['email']); ?>" disabled>
                                </div>
                                <label>Nomor Telepon</label>
                                <div class="col-12">
                                    <input type="text" class="form-control text-secondary" value="<?php echo htmlspecialchars($user['notlp_siswa']); ?>" disabled>
                                </div>
                                <label>Jenis Kelamin</label>
                                <div class="col-12">
                                    <input type="text" class="form-control text-secondary" value="<?php echo htmlspecialchars($user['jenisKel']); ?>" disabled>
                                </div>
                                <label>Kelas</label>
                                <div class="col-12">
                                    <input type="text" class="form-control text-secondary" value="<?php echo htmlspecialchars($user['kelas']); ?>" disabled>
                                </div>
                                <label>Sekolah</label>
                                <div class="col-12">
                                    <input type="text" class="form-control text-secondary" value="<?php echo htmlspecialchars($user['sekolah']); ?>" disabled>
                                </div>
                                <label>Jurusan</label>
                                <div class="col-12">
                                    <input type="text" class="form-control text-secondary" value="<?php echo htmlspecialchars($user['jurusan']); ?>" disabled>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-warning mb-3">
                            <div class="card-header"><strong>Kontak Orangtua/Wali</strong></div>
                            <div class="card-body">
                                <label>Nama Orangtua/Wali</label>
                                <div class="col-12">
                                    <input type="text" class="form-control text-secondary" value="<?php echo htmlspecialchars($user['nama_ortu']); ?>" disabled>
                                </div>
                                <label>Nomor Telepon Orangtua</label>
                                <div class="col-12">
                                    <input type="text" class="form-control text-secondary" value="<?php echo htmlspecialchars($user['notlp_ortu']); ?>" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
