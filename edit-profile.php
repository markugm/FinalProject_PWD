<?php
session_start();
$konek = new mysqli('localhost', 'root', '', 'project_bimbel');

if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}

$uname = $_SESSION['uname'];
$query = "SELECT * FROM datadiri WHERE uname='$uname'";
$result = $konek->query($query);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    header("Location: login.php?pesan=gagal");
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

<body class="wave-bg">
    <div class="profile-pic p-5">
        <span>@<?php echo htmlspecialchars($user['uname']); ?></span>
        <img src="/ProjekAkhir/img/pfp_dummy.jpg" alt="Foto Profil">
    </div>
    
    <div class="container">
        <h1 class="text-center fw-bold mb-4">Edit Profile</h1>
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="profile-menu">
                    <img src="/ProjekAkhir/img/logo_horizontal.png" class="mb-4" alt="" width="90%">
                    <a class="text-decoration-none" href="home-login.php"><button class="btn btn-light w-100">Home</button></a>
                    <a class="text-decoration-none" href="edit-profile.php"><button class="btn btn-light w-100">Edit Profile</button></a>
                    <a class="text-decoration-none" href="./main/logout.php"><button class="btn btn-danger w-100">Logout</button></a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card border-warning mb-3">
                    <div class="card-header"><strong>Edit Profile</strong></div>
                    <div class="card-body">
                        <form action="./main/edit-process.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Username</label>
                                        <input type="text" class="form-control text-secondary" placeholder="username" name="uname" value="<?= $user['uname']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control text-secondary" placeholder="nama lengkap" name="nama_siswa" value="<?= $user['nama_siswa']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" class="form-control text-secondary" placeholder="email" name="email" value="<?= $user['email']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nomor Telepon</label>
                                        <input type="text" class="form-control text-secondary" placeholder="nomor telepon" name="notlp_siswa" value="<?= $user['notlp_siswa']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-select" name="jenisKel" required>
                                            <option value="Laki-laki" <?= $user['jenisKel'] == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
                                            <option value="Perempuan" <?= $user['jenisKel'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Kelas</label>
                                        <select class="form-select" name="kelas" required>
                                            <option value="10" <?= $user['kelas'] == '10' ? 'selected' : ''; ?>>10</option>
                                            <option value="11" <?= $user['kelas'] == '11' ? 'selected' : ''; ?>>11</option>
                                            <option value="12" <?= $user['kelas'] == '12' ? 'selected' : ''; ?>>12</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Sekolah</label>
                                        <input type="text" class="form-control text-secondary" placeholder="sekolah" name="sekolah" value="<?= $user['sekolah']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Jurusan</label>
                                        <select class="form-select" name="jurusan" required>
                                            <option value="MIPA" <?= $user['jurusan'] == 'MIPA' ? 'selected' : ''; ?>>MIPA</option>
                                            <option value="IPS" <?= $user['jurusan'] == 'IPS' ? 'selected' : ''; ?>>IPS</option>
                                            <option value="BAHASA" <?= $user['jurusan'] == 'BAHASA' ? 'selected' : ''; ?>>BAHASA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Nama Orangtua/Wali</label>
                                        <input type="text" class="form-control text-secondary" placeholder="nama orangtua" name="nama_ortu" value="<?= $user['nama_ortu']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nomor Telepon Orangtua</label>
                                        <input type="text" class="form-control text-secondary" placeholder="nomor telepon" name="notlp_ortu" value="<?= $user['notlp_ortu']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 btn-container text-center">
                                <button class="btn btn-primary btn-save" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
