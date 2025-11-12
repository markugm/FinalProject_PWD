<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/ProjekAkhir/img/favicon.ico" type="image/x-icon">
  <title>Registrasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/ProjekAkhir/css/gaya.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
      background-color: #f0f0f0;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 50px;
      margin-bottom: 50px;
      /* Added margin-bottom here */
    }

    .card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 500px;
      margin-bottom: 30px;
      /* Added margin-bottom here */
    }

    .card h5 {
      margin-top: 0;
      font-size: 1.5rem;
      font-weight: 100;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #ffc107;
      border: none;
      border-radius: 4px;
      color: black;
      font-size: 16px;
      cursor: pointer;
      text-align: center;
    }

    .form-group button:hover {
      background-color: #e0a800;
    }

    .form-check-label {
      font-size: 0.875rem;
    }

    .login-register-text {
      font-size: 0.875rem;
      margin-top: 15px;
      text-align: center;
    }

    .login-register-text a {
      color: #007BFF;
      text-decoration: none;
    }

    .login-register-text a:hover {
      text-decoration: underline;
    }

    .btn-container {
      display: flex;
      justify-content: center;
    }

    footer {
      margin-top: auto;
      background-color: #f0f0f0;
      padding: 20px 0;
      width: 100%;
      text-align: center;
    }
  </style>
</head>

<body style="
      background-image: url('/ProjekAkhir/img/wave-4.png');
      background-size: cover;
      background-repeat: no-repeat;
    ">
  <div class="container">
    <img src="./img/logo_horizontal.png" alt="Logo" style="width: 300px; margin-bottom: 30px;">
    <div class="card">
      <form class="row g-3" method="POST" action="./main/regist-login.php">
        <h6 class="text-center fw-bold mb-4">Ayo masuk dan menjelajah bersama NEOZEN lainnya</h6>
        <div class="col-12">
          <label for="dataDiri" class="form-label"><strong>Data Pribadi</strong></label>
          <input type="text" class="form-control" id="inputUname" name="uname" placeholder="username" required>
        </div>
        <div class="col-12">
          <input type="text" class="form-control" id="inputNama" name="nama_siswa" placeholder="nama lengkap" required>
        </div>
        <div class="col-12">
          <input type="email" class="form-control" id="inputEmail" name="email" placeholder="email" required>
        </div>
        <div class="col-12">
          <div class="input-group">
            <div class="input-group-text">62</div>
            <input type="number" class="form-control" id="inputNoSiswa" name="notlp_siswa" placeholder="nomor telepon" required>
          </div>
        </div>
        <div class="col-12">
          <select class="form-select" id="selectjenisKel" name="jenisKel" required>
            <option value="" disabled selected> jenis kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="col-12">
          <select class="form-select" id="selectKelas" name="kelas" required>
            <option value="" disabled selected> kelas</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
        </div>
        <div class="col-12">
          <input type="text" class="form-control" id="inputSekolah" name="sekolah" placeholder="sekolah" required>
        </div>
        <div class="col-12">
          <select class="form-select" id="selectJurusan" name="jurusan" required>
            <option value="" disabled selected> jurusan</option>
            <option value="MIPA">MIPA</option>
            <option value="IPS">IPS</option>
            <option value="BAHASA">BAHASA</option>
          </select>
        </div>
        <div class="col-12">
          <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
        </div>
        <div class="col-12">
          <label for="infoOrtu" class="form-label"><strong>Info Orang Tua/Wali</strong></label>
          <input type="text" class="form-control" id="inputNamaOrtu" name="nama_ortu" placeholder="nama orangtua" required>
        </div>
        <div class="col-12">
          <div class="input-group">
            <div class="input-group-text">62</div>
            <input type="number" class="form-control" id="inputNoOrtu" name="notlp_ortu" placeholder="nomor telepon" required>
          </div>
        </div>

        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="setuju" name="setuju" required>
            <label class="form-check-label" for="setuju">
              Dengan menekan tombol ini, kamu menyetujui kebijakan privasi serta kondisi dan ketentuan oleh tim NEORON
            </label>
          </div>
        </div>

        <div class="col-12 btn-container">
          <button class="btn btn-primary" type="submit">mulai menyelami</button>
        </div>
      </form>

      <p class="login-register-text">sudah memiliki akun? <a href="login.php">masuk di sini</a></p>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonym5ous"></script>
</body>

</html>