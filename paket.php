<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/ProjekAkhir/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/ProjekAkhir/css/stylelagi.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Paket Belajar</title>

    <style>
        /* Adjust margin-top for the content to avoid being overlapped by the navbar */
        body {
            padding-top: 85px;
        }


        .rounded-bg {
            background-color: #ffea4d;
            /* Change to your desired background color */
            border-radius: 20px;
            /* Adjust the radius as needed */
        }

        .btn-category {
            width: 100px;
            /* Set the fixed width for all buttons */
            border-radius: 20px;
        }
    </style>
</head>

<body class="bg-3">

    <!-- navbar -->
    <nav class="navbar shadow fixed-top bg-1">
        <div class="container">
            <a class="ps-5 navbar-brand" href="http://localhost/ProjekAkhir/home.php">
                <img src="/ProjekAkhir/img/logo_horizontal.png" alt="logo" style="height: 70px;">
            </a>
            <ul class="nav nav-underline ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="http://localhost/ProjekAkhir/home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/ProjekAkhir/paket.php">Paket Belajar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="http://localhost/ProjekAkhir/mentor.php">Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="http://localhost/ProjekAkhir/aboutus.php">About Us</a>
                </li>
                <li class="ps-5 nav-item">
                    <a class="btn btn-outline-dark fw-semibold" href="/ProjekAkhir/login.php" role="button">Sign-in</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end -->

    <section>
        <div class="container m-5">
            <center>
                <h1 class="fw-bold "> <i class="bi bi-mortarboard-fill"></i> Paket Belajar NEORON <h1>
                        <h4 class="ms-5">Pilih paket belajar sesuai keinginanmu!</h4>

            </center>
        </div>
    </section>

    <!-- kategori -->
    <section>
        <div class="row justify-content-center mb-5">
            <div class="col"></div>
            <div class="col-7">
                <div class="row align-items-center text-center rounded-bg p-3">
                    <div class="col-4">
                        <h4 class="fw-bold">Kategori</h4>
                    </div>
                    <div class="col-auto justify-content-evenly ms-4">
                        <a class="btn btn-light btn-category me-4" href="#sma" role="button" style="border-radius: 20px;">SMA</a>
                        <a class="btn btn-light btn-category me-4" href="#utbk" role="button" style="border-radius: 20px;">UTBK</a>
                        <a class="btn btn-light btn-category" href="#diamonds" role="button" style="border-radius: 20px;">Diamonds</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </section>
    <!-- kategori end -->

    <!-- sma -->
    <section id="sma" class="bg-1">
        <div class="container p-3">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-auto text-end">
                    <button type="button" class="btn btn-light fw-bold fs-5">SMA</button>
                </div>
                <div class="col ps-0 mt-2">
                    <h4 class="fw-bold">CLASSES</h4>
                </div>
            </div>

            <div class="row mt-4 pb-3">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="row justify-content-evenly">
                        <div class="col">
                            <div class="card h-100">
                                <img src="/ProjekAkhir/img/vip.png" class="card-img-top" alt="Paket VIP 1 tahun">

                                <div class="card-body">
                                    <h5 class="fw-bold ">VIP 1 Tahun</h5>
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i> <br><br><i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i> <br><br><i class="bi bi-check-all"></i>
                                        </div>
                                        <div class="col">
                                            <p class="fw-semibold">
                                                Akses semua fitur belajar selama 1 tahun <br>Akses fitur Unicorn yang akan memantau progresmu <br>Video belajar animasi sesuai kurikulum terbaru <br>Rangkuaman dan Flash card yang siap membantu <br>Latihan materi melalui puluhan ribu soal di Bank Soal SMA + UTBK
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="/ProjekAkhir/img/exlusive.png" class="card-img-top" alt="Paket Ekslusif 6 Bulan">

                                <div class="card-body">
                                    <h5 class="fw-bold ">Ekslusif 6 Bulan</h5>
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i> <br><br><i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i> <br><br><i class="bi bi-check-all"></i>
                                        </div>
                                        <div class="col">
                                            <p class="fw-semibold">
                                                Akses semua fitur belajar selama 6 bulan <br>Akses fitur Unicorn yang akan memantau progresmu <br>Video belajar animasi sesuai kurikulum terbaru <br>Rangkuaman dan Flash card yang siap membantu <br>Latihan materi melalui puluhan ribu soal di Bank Soal SMA + UTBK
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto"></div>
                </div>
            </div>

        </div>
    </section>
    <!-- sma end -->

    <!-- utbk -->
    <section id="utbk">
        <div class="container p-3">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-auto text-end">
                    <button type="button" class="btn btn-light fw-bold fs-5">UTBK</button>
                </div>
                <div class="col ps-0 mt-2">
                    <h4 class="fw-bold">INTENSIVE</h4>
                </div>
            </div>

            <div class="row mt-4 pb-3">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="row justify-content-evenly">
                        <div class="col">
                            <div class="card h-100">
                                <img src="/ProjekAkhir/img/camp.png" class="card-img-top" alt="UTBK Camp 6 Bulan">

                                <div class="card-body">
                                    <h5 class="fw-bold ">UTBK Camp 6 Bulan</h5>
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i>
                                        </div>
                                        <div class="col">
                                            <p class="fw-semibold">
                                            Periode penggunaan 6 bulan <br>Akses Unicorn sepuasnya <br>Dapat 80 packs diamond <br>Pemeringkatan Nasional dengan nilai try out <br>Materi belajar super lengkap dan menarik
                                        </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="/ProjekAkhir/img/focus.png" class="card-img-top" alt="UTBK Focus 1 Tahun">

                                <div class="card-body">
                                    <h5 class="fw-bold ">UTBK Focus 1 Tahun</h5>
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i> <br><i class="bi bi-check-all"></i>
                                        </div>
                                        <div class="col">
                                            <p class="fw-semibold">
                                            Periode penggunaan 12 bulan <br>Kelas interaktif dengan Mentor keren <br>Kelas hingga 10 sesi / pekan <br>Rekaman live teaching dan rangkuman materi <br>Dapat 80 packs diamonds <br>Akses Unicorn sepuasnya <br>Materi belajar super lengkap dan menarik <br>Tes minat dan bakat <br>Grup komunitas belajar
                                        </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto"></div>
                </div>
            </div>

        </div>
    </section>
    <!-- utbk end -->

    <!-- diamonds -->
    <section id="diamonds" class="bg-1">
        <div class="container p-3">
            <div class="row mt-2">
                <div class="col"></div>
                <div class="col text-center">
                    <button type="button" class="btn btn-light fw-bold fs-5">DIAMONDS</button>
                    <p class="fw-semibold pt-3">Ayo selami NEORON lebih dalam dengan bantuan Diamonds!</p>
                </div>
                <div class="col"></div>
            </div>

            <div class="row mt-3 pb-3">
                <div class="col-1"></div>
                <div class="col-auto">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <div class="card h-100">
                                <img src="/ProjekAkhir/img/diamonds-1.png" class="card-img-top" alt="Diamonds 80 Packs">
                                <div class="card-body">
                                    <h5 class="fw-bold ">Diamonds 80 Packs</h5>
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="bi bi-gem"></i>
                                        </div>
                                        <div class="col">
                                            <p class="fw-semibold">Dapatkan 80 Diamond yang bisa kamu gunakan untuk 20 kali Try Out persiapan UTBK.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card h-100">
                                <img src="/ProjekAkhir/img/diamonds-2.png" class="card-img-top" alt="Diamonds 40 Packs">
                                <div class="card-body">
                                    <h5 class="fw-bold ">Diamonds 40 Packs</h5>
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="bi bi-gem"></i>
                                        </div>
                                        <div class="col">
                                            <p class="fw-semibold">Dapatkan 40 Diamond yang bisa kamu gunakan untuk 10 kali Try Out persiapan UTBK.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card h-100">
                                <img src="/ProjekAkhir/img/diamonds-3.png" class="card-img-top" alt="Diamonds 5 Packs">
                                <div class="card-body">
                                    <h5 class="fw-bold ">Diamonds 5 Packs</h5>
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="bi bi-gem"></i>
                                        </div>
                                        <div class="col">
                                            <p class="fw-semibold">Pilih paket 5 Diamond yang dapat digunakan untuk konseling, tes minat bakat, atau Try Out UTBK.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-1"></div>
                </div>
            </div>

        </div>
    </section>
    <!-- diamonds end -->

    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
            <h4 class="fw-bold pt-5">Mulai Belajar Sekarang!</h4>
            <a class="btn btn-light fw-bold fs-5 mt-3" href="/ProjekAkhir/login.php" role="button" style="width: 200px; border-radius: 20px;">JOIN NOW!</a>    
        </div>
        </div>
    </div>

    <footer>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffea4d" fill-opacity="1" d="M0,64L80,101.3C160,139,320,213,480,213.3C640,213,800,139,960,106.7C1120,75,1280,85,1360,90.7L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>
        <div class="row bg-1" style="margin-top: -20px;">

            <div class="col-1"></div>
            <div class="col">

                <div class="row justify-content-center pt-5">
                    <div class="col-4 pe-5">
                        <img src="/ProjekAkhir/img/logo_vertikal.png" alt="NEORON" width="150">
                        <h4 class="pt-4 mb-0">PT. Bona Heya Nusantara</h4>
                        <p class="lh-sm">Jl. Babarsari Jl. Tambak Bayan No.2, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
                    </div>
                    <div class="col-3">
                        <p class="fw-bold">Kontak Kami</p>
                        <p><i class="bi bi-telephone-fill"></i> 08562736372</p>
                        <p><i class="bi bi-envelope-at-fill"></i> info@neoron.com</p>
                        <p><i class="bi bi-linkedin"></i> Neoron</p>
                    </div>
                    <div class="col-3">
                        <p><a class="link-offset-2 text-dark fw-bold" href="/ProjekAkhir/aboutus.php">Tentang Kami</a></p>
                        <p class="fw-bold mb-1 mt-4">Ikuti Kami</p>
                        <a href="https://www.instagram.com/ghaitsyaa/">
                            <img src="/ProjekAkhir/img/instagram.png" alt="instagram" width="40">
                        </a>
                        <a href="https://www.facebook.com/saniadinara/">
                            <img class="" src="/ProjekAkhir/img/facebook.png" alt="facebook" width="40">
                        </a>
                        <a href="https://x.com/spritenthu">
                            <img src="/ProjekAkhir/img/twitter.png" alt="twitter" width="40">
                        </a>
                        <a href="https://youtube.com/@saniadinara4444?si=7SFI6ExLlvq8hVss">
                            <img src="/ProjekAkhir/img/youtube.png" alt="youtube" width="40">
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-1"></div>
            <p class="text-center fw-bold pt-4"> © 2024 NEORON Tech. All Rights Reserved PT. Bona Heya Nusantara</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonym5ous"></script>
</body>

</html>