<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/ProjekAkhir/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/ProjekAkhir/css/gaya.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Mentor</title>

    <style>
        /* Adjust margin-top for the content to avoid being overlapped by the navbar */
        body {
            padding-top: 85px;
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
                    <a class="nav-link text-dark" href="http://localhost/ProjekAkhir/paket.php">Paket Belajar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Mentor</a>
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

    <!-- header -->
    <div class="container mb-4">
        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <h1 class="fw-bold mt-5"> <i class="bi bi-person-heart"></i> NEORON's Mentors </h1>
                <h4 class="ms-5">Ayo kenalan sama Mentor-mentor keren dari NEORON!</h4>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <!-- header end -->

    <!-- running text ajasih -->
    <div class="text-wrapper fw-bold mb-3">
            <p class="running">Bergabunglah dengan Neoron untuk Belajar Lebih Mudah dan Efektif! Bingung mau belajar? Pusing dengan materi sekolah yang sulit dipahami? Tenang saja, Neoron hadir untuk memberikan solusi terbaik bagi kamu! Di Neoron, kami menyediakan mentor-mentor berpengalaman yang siap membantu kamu menguasai berbagai materi pelajaran dengan mudah. </p>
            <p class="running">Kenapa harus Neoron? Mentor Profesional: Dapatkan bimbingan dari para ahli di bidangnya. Materi Lengkap: Akses materi pembelajaran yang lengkap dan terstruktur. Belajar Interaktif: Metode pembelajaran yang menarik dan mudah dipahami. Jadi, tunggu apa lagi? Daftarkan diri kamu sekarang di Neoron dan rasakan pengalaman belajar yang berbeda. Bersama Neoron, belajar jadi lebih menyenangkan dan mudah!</p>
        </div>
    <!-- running text end -->

    <!-- sma -->
    <section id="mentor-sma" class="bg-1 pb-2 pt-2">
        <div class="row mb-5">
            <div class="col-1"></div>
            <div class="col mt-3">

                <div class="row ">
                    <div class="col-1 ms-3" style="background-color: #ffff; border-radius: 23px;">
                        <h2 class="text-center pt-1">SMA</h2>
                    </div>
                    <div class="col">
                        <h2 class="pt-1 fw-bold">Mentors</h2>
                    </div>
                </div>
                <p class="fs-5 ms-2 mt-1 mb-4">Pelajaran SMA bikin pusing? Bareng mereka dijamin aman aja!</p>



                <div class="row">
                    <div class="col-md">
                        <div id="carouselExampleIndicators" class="carousel slide ">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                            </div>
                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                    <div class="row pb-2">
                                        <div class="col-md-4">
                                            <div class="card h-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="/ProjekAkhir/img/mentor1.jpg" width="110%" alt="" class="rounded-start">
                                                    </div>
                                                    <div class="col-md ps-4">
                                                        <h5 class="fw-bold card-title mt-4 mb-0">Jamal Jung</h5>
                                                        <p class="fw-bold card-text mb-1">Mentor Teacher Kimia</p>
                                                        <p class="mt-0 card-text">Universitas Gadjah Mada</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="/ProjekAkhir/img/mentor2.png" width="110%" alt="" class="rounded-start">
                                                    </div>
                                                    <div class="col-md ps-4">
                                                        <h5 class="fw-bold card-title mt-4 mb-0">Maudy Ayunda</h5>
                                                        <p class="fw-bold card-text mb-1">Mentor Teacher Biologi</p>
                                                        <p class="mt-0 card-text">Universitas Stanford</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="" width="110%" alt="" class="rounded-start">
                                                    </div>
                                                    <div class="col-md ps-4">
                                                        <h5 class="fw-bold card-title mt-4 mb-0">Bambang Yuwono</h5>
                                                        <p class="fw-bold card-text mb-1">Mentor Teacher Matematika</p>
                                                        <p class="mt-0 card-text">Institut Teknologi Bandung</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row pb-2">
                                        <div class="col-md-4">
                                            <div class="card h-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="/ProjekAkhir/img/mentor4.png" width="110%" alt="" class="rounded-start">
                                                    </div>
                                                    <div class="col-md ps-4">
                                                        <h5 class="fw-bold card-title mt-4 mb-0">Wilis Kaswidjanti</h5>
                                                        <p class="fw-bold card-text mb-1">Mentor Teacher Fisika</p>
                                                        <p class="mt-0 card-text">Universitas Gadjah Mada</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="/ProjekAkhir/img/mentor5.png" width="110%" alt="" class="rounded-start">
                                                    </div>
                                                    <div class="col-md ps-4">
                                                        <h5 class="fw-bold card-title mt-4 mb-0">Tio Maharendra</h5>
                                                        <p class="fw-bold card-text mb-1">Mentor Teacher Ekonomi</p>
                                                        <p class="mt-0 card-text">Universitas Indonesia</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="/ProjekAkhir/img/mentor6.png" width="110%" alt="" class="rounded-start">
                                                    </div>
                                                    <div class="col-md ps-4">
                                                        <h5 class="fw-bold card-title mt-4 mb-0">Sekar Wangi</h5>
                                                        <p class="fw-bold card-text mb-1">Mentor Teacher Bahasa Indonesia</p>
                                                        <p class="mt-0 card-text">Universitas Sebelas Maret</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-1"></div>
                </div>
    </section>
    <!-- sma end -->


    <!-- utbk -->
    <section id="mentor-utbk" class="bg-3 pb-2 mt-5">
        <div class="row mb-5">
            <div class="col-1"></div>
            <div class="col mt-3">

                <div class="row">
                    <div class="col-1 ms-3" style="background-color: #ffff; border-radius: 23px;">
                        <h2 class="text-center pt-1"> UTBK </h2>
                    </div>
                    <div class="col">
                        <h2 class="pt-1 fw-bold">Mentors</h2>
                    </div>
                </div>
                <p class="fs-5 ms-2 mt-1 mb-4 lh-sm">Bingung mau belajar <strong>UTBK</strong> dari mana? <br> Tenang, kami punya mentor-mentor yang siap membantu kamu!</p>



                <div class="row">
                    <div class="col-md">
                        <div id="carouselIndicators2" class="carousel slide ">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselIndicators2" data-bs-slide-to="0" class="active" aria-current="true"></button>
                                <button type="button" data-bs-target="#carouselIndicators2" data-bs-slide-to="1"></button>
                            </div>
                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                    <div class="row pb-2">
                                        <div class="col-md-4">
                                            <div class="card h-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="/ProjekAkhir/img/mentor7.png" width="110%" alt="" class="rounded-start">
                                                    </div>
                                                    <div class="col-md ps-4">
                                                        <h5 class="fw-bold card-title mt-4 mb-0">Jerome Polin</h5>
                                                        <p class="fw-bold card-text mb-1">Mentor Teacher PM</p>
                                                        <p class="mt-0 card-text">Universitas Tokyo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="/ProjekAkhir/img/mentor8.png" width="110%" alt="" class="rounded-start">
                                                    </div>
                                                    <div class="col-md ps-4">
                                                        <h5 class="fw-bold card-title mt-4 mb-0">Johnny Sunandar</h5>
                                                        <p class="fw-bold card-text mb-1">Mentor Teacher PK</p>
                                                        <p class="mt-0 card-text">Universitas Andalas</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="/ProjekAkhir/img/mentor9.png" width="110%" alt="" class="rounded-start">
                                                    </div>
                                                    <div class="col-md ps-4">
                                                        <h5 class="fw-bold card-title mt-4 mb-0">Jihan Maharani</h5>
                                                        <p class="fw-bold card-text mb-1">Mentor Teacher PBI</p>
                                                        <p class="mt-0 card-text">Universitas Brawijaya</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row pb-2">
                                        <div class="col-md-4">
                                            <div class="card h-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="/ProjekAkhir/img/mentor10.png" width="110%" alt="" class="rounded-start">
                                                    </div>
                                                    <div class="col-md ps-4">
                                                        <h5 class="fw-bold card-title mt-4 mb-0">Duta Akmala</h5>
                                                        <p class="fw-bold card-text mb-1">Mentor Teacher LBI</p>
                                                        <p class="mt-0 card-text">Universitas Padjajaran</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="/ProjekAkhir/img/mentor11.png" width="110%" alt="" class="rounded-start">
                                                    </div>
                                                    <div class="col-md ps-4">
                                                        <h5 class="fw-bold card-title mt-4 mb-0">Kuncoro Adi</h5>
                                                        <p class="fw-bold card-text mb-1">Mentor Teacher TPS</p>
                                                        <p class="mt-0 card-text">UPN 'Veteran' Jakarta</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="/ProjekAkhir/img/mentor12.png" width="110%" alt="" class="rounded-start">
                                                    </div>
                                                    <div class="col-md ps-4">
                                                        <h5 class="fw-bold card-title mt-4 mb-0">Monica Intan</h5>
                                                        <p class="fw-bold card-text mb-1">Mentor Teacher TKA</p>
                                                        <p class="mt-0 card-text">Universitas Airlangga</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-1"></div>
                </div>
    </section>
    <!-- utbk -->

    <div class="container mt-4">
        <div class="row">
            <div class="col text-center">
            <h4 class="fw-bold pt-5">Ingin tau lebih banyak?</h4>
            <a class="btn btn-light fw-bold fs-5 mt-2" href="/ProjekAkhir/login.php" role="button" style="width: 200px; border-radius: 20px;">JOIN NOW!</a>    
        </div>
        </div>
    </div>

    <!-- footer -->
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
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonym5ous"></script>
</body>

</html>