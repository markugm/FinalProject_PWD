<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/ProjekAkhir/img/favicon.ico" type="image/x-icon">
    <title>Login</title>
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
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 500px;
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

<body class="" style="
       background-image: url('/ProjekAkhir/img/wave-3.png');
      background-size: cover;
      background-repeat: no-repeat;
    ">

    <?php
    if (isset($_GET["pesan"])) {
        if ($_GET["pesan"] == "berhasil") {
            echo "<script>alert('akun berhasil terdaftar!')</script>";
        } else if ($_GET["pesan"] == "gagal") {
            echo "<script>alert('email atau password salah')</script>";
        } else if ($_GET["pesan"] == "keluar") {
            echo "<script>alert('berhasil keluar')</script>";
        } else if ($_GET["pesan"] == "terdaftar") {
            echo "<script>alert('sudah terdaftar')</script>";
        } else if ($_GET["pesan"] == "belum") {
            echo "<script>alert('belum terdaftar')</script>";
        }
    }
    ?>

    <section>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 85vh;">
        <div class="row w-100">
            <div class="col-lg-6 col-md-8 col-sm-10 col-12 d-flex justify-content-center mb-4">
                <div class="card w-100" style="max-width: 500px;">
                    <div class="row">
                        <div class="col m-4">
                            <form class="row g-3" method="POST" action="./main/check-login.php">
                                <div class="text-center">
                                    <h2 class="fw-bold">LOGIN</h2>
                                    <h6 class="fw-semibold mb-4">Siap menjelajah bersama NEOZEN lainnya?</h6>
                                </div>
                                <div class="col-12">
                                    <label for="inputUname" class="form-label mb-0 ms-1">Masukkan username</label>
                                    <input type="text" class="form-control font-monospace" id="inputUname" name="uname" placeholder="username" required>
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label mb-0 ms-1">Masukkan password</label>
                                    <input type="password" class="form-control font-monospace" id="password" name="password" placeholder="password" required>
                                </div>
                                <div class="col-12 btn-container">
                                    <button type="submit" class="btn btn-primary mt-3 w-100">Mulai menyelami</button>
                                </div>
                            </form>
                            <p class="login-register-text text-center">Belum punya akun? <a href="regist.php">Daftar di sini</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="invisible col-lg-6 col-md-8 col-sm-10 col-12 d-flex justify-content-center align-items-center">
                <img src="/ProjekAkhir/img/logo_horizontal.png" alt="Logo" class="img-fluid" style="max-width: 80%;">
            </div>
        </div>
    </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>