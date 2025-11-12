<?php
session_start();
$konek  = new mysqli('localhost', 'root', '', 'project_bimbel');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/ProjekAkhir/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/ProjekAkhir/css/buatstyle.css">
    <title>NEORON TECH CENTER</title>

    <style>
        /* Adjust margin-top for the content to avoid being overlapped by the navbar */
        body {
            padding-top: 80px;
        }

        .dropdown-toggle {
            text-decoration: none;
        }

        .dropdown-toggle::after {
            border-top-color: black;
        }
    </style>
</head>

<body class="home">

    <?php
    if (!isset($_SESSION['uname'])) {
        header('location: login.php');
        exit();
    }

    $uname = $_SESSION['uname'];
    ?>

    <!-- navbar -->
    <nav class="navbar shadow fixed-top bg-1">
        <div class="container">
            <a class="ps-5 navbar-brand" href="http://localhost/ProjekAkhir/home-login.php">
                <img src="/ProjekAkhir/img/logo_horizontal.png" alt="logo" style="height: 70px;">
            </a>
            <ul class="nav nav-underline ms-auto">
                <li class="nav-item pt-2">
                    <a class="nav-link active" aria-current="page" href="http://localhost/ProjekAkhir/home-login.php">Home</a>
                </li>
                <li class="nav-item pt-2">
                    <a class="nav-link text-dark" href="http://localhost/ProjekAkhir/ulasan-login.php">Ulasan</a>
                </li>
                <li class="nav-item pt-2">
                    <a class="nav-link text-dark" href="http://localhost/ProjekAkhir/paket-login.php">Paket Belajar</a>
                </li>
                <li class="nav-item pt-2">
                    <a class="nav-link text-dark" href="http://localhost/ProjekAkhir/aboutus-login.php">About Us</a>
                </li>
                <li class="mt-0 ps-5 nav-item">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/ProjekAkhir/img/icon.jpg" alt="profile" width="55" class="rounded-circle shadow-sm">
                        </a>

                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="/ProjekAkhir/dashboard-login.php">Profile</a></li>
                            <li><a class="dropdown-item" href="/ProjekAkhir/main/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end -->


    <!-- content 1 -->
    <section id="cont-1">
        <div class="pt-4 row g-0 position-relative justify-content-center bg-2">
            <div class="mt-2 col-md-4 mb-md-0 p-md-4">
                <img src="/ProjekAkhir/img/content-1.png" class="w-100" alt="anak sekolah" style="width: 100%; height: auto;">
            </div>
            <div class="ms-4 mt-2 col-md-4 p-3 ps-md-0">
                <h2 class="mt-5"><strong>Hey, <?php echo htmlspecialchars($uname) ?>!</strong></h2>
                <p class="fw-semibold pt-1" style="font-size:17px;">NEORON siap mendukung kebutuhan belajar kamu kapan saja, di mana saja. Kamu akan diajak untuk mengikuti petualangan menghubungkan NEORON melalui video pembelajaran yang menyenangkan bersama mentor super keren. Tertarik ingin menyelam bersama kami dan bertemu NEOZEN lainnya?</p>
                <center><a class="btn btn-light fw-bold fs-5 mt-3" href="https://pahamify.com/download/" role="button" style="width: 230px; border-radius: 20px;">Download Aplikasi</a></center>
                </div>
        </div>
       
    </section>
    <!-- content 1 end -->

    <!-- keunggulan -->
    <section id="cont-2">
        <div class="mt-4 row">
            <div class="col-1"></div>
            <div class="col ">
                <h2><strong>Kenapa Harus NEORON?</strong></h2>
            </div>
        </div>
        <div class="row cont-1 pb-3">
            <div class="col-1"></div>
            <div class="col">

                <div class="pt-4 row justify-content-center">
                    <div class="col-3">
                        <div class="row">
                            <div class="col-3 ">
                                <img src="/ProjekAkhir/img/1.png" alt="materi" width="60" class="rounded-circle">
                            </div>
                            <div class="col-9 ps-2">
                                <h4>Belajar materi lebih seru</h4>
                                <p>Video belajar animasi dijamin buat belajarmu jadi menyenangkan, dilengkapi dengan Rangkuman, Infografis, Flash card, dan Kuis supaya belajarmu makin efektif.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-3">
                                <img src="/ProjekAkhir/img/2.png" alt="ujian" width="60" class="rounded-circle">
                            </div>
                            <div class="col-9 ps-2">
                                <h4>Lebih siap taklukan ujian</h4>
                                <p>Latihan soal dan simulasi ujian dari NEORON bakal bantu persiapanmu hadapi ujian tengah dan akhir semester, UTBK, hingga Ujian Mandiri masuk kampus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-3">
                                <img src="/ProjekAkhir/img/3.png" alt="konsul" width="60" class="rounded-circle">
                            </div>
                            <div class="col-9 ps-2">
                                <h4>Konsultasi kapan pun dan dimana pun</h4>
                                <p>Dukungan konsultasi yang ramah dan bebas untuk membantu kamu memecahkan masalah dan mengatasi kesulitan belajar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-3">
                                <img src="/ProjekAkhir/img/4.png" alt="mentor" width="60" class="rounded-circle">
                            </div>
                            <div class="col-9 ps-2">
                                <h4>Para mentor yang keren banget</h4>
                                <p>Tim mentor yang berkualitas, berpengalaman, dan penuh semangat siap untuk membimbing kamu menuju kesuksesan akademis.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-1"></div>
        </div>
    </section>
    <!-- keunggulan end -->

    <!-- testimoni -->
    <section id="cont-3" class="bg-1">
        <div class="pt-3 row text-center">
            <div class="col">
                <h2><strong>Apa Kata Mereka?</strong></h2>
                <p class="fs-5">Dari NEOZEN yang telah berlayar bersama kita</p>
            </div>
        </div>
        <div class="row justify-content-center pb-3">
        <div class="ms-5 col-md-3 mb-3">
                <div class="card text-center shadow h-100">
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-sm-4 pe-0">
                                    <img src="/ProjekAkhir/img/acc1.jpg" alt="Jiandra Sakti" width="70" class="shadow-sm rounded-circle img-thumbnail">
                                </div>
                                <div class="col-sm-8 text-start pt-2">
                                    <h5 class="fw-bold mb-0">Jiandra Sakti</h5>
                                    <p class="lh-sm" style="font-size: smaller;">Astronomi - Institut Teknologi Bandung</p>
                                </div>
                            </div>
                        </div>
                        <p class="pt-2 lh-sm">Neoron beneran recommended banget! Materinya lengkap dan gampang banget dipahami. Berkat bimbel ini, aku berhasil masuk universitas impian</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center shadow h-100">
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-sm-4 pe-0">
                                    <img src="/ProjekAkhir/img/acc2.jpg" alt="Bintang Angkasa" width="70" class="shadow-sm rounded-circle img-thumbnail">
                                </div>
                                <div class="col-sm-8 text-start pt-2">
                                    <h5 class="fw-bold mb-0">Bintang Angkasa</h5>
                                    <p class="lh-sm" style="font-size: smaller;">Psikologi - Universitas Gadjah Mada</p>
                                </div>
                            </div>
                        </div>
                        <p class="pt-2 lh-sm">Neoron itu bimbel paling oke yang pernah aku ikuti. Mentornya asyik dan selalu ngasih semangat. Prestasi aku naik drastis berkat Neoron!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center shadow h-100">
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-sm-4 pe-0">
                                    <img src="/ProjekAkhir/img/acc3.jpg" alt="Anindya Ningsih" width="70" class="shadow-sm rounded-circle img-thumbnail">
                                </div>
                                <div class="col-sm-8 text-start pt-2">
                                    <h5 class="fw-bold mb-0">Anindya Ningsih</h5>
                                    <p class="lh-sm" style="font-size: smaller;">Kedokteran - Universitas Airlangga</p>
                                </div>
                            </div>
                        </div>
                        <p class="pt-2 lh-sm">Unforgetable experience banget belajar mati-matian banget bareng Neoron dan puji Tuhan sekarang impianku berhasil tercapai!! LUVV</p>
                    </div>
                </div>
            </div>
    </section>
    <!-- testimoni end -->

    <!-- mentor -->
    <section id="mentor">
        <div class="row mb-5">
            <div class="col-1"></div>
            <div class="col mt-5">

                <h2><strong>NEORON's Mentors</strong></h2>
                <p class="fs-5 mt-0">Yuk kenalan sama Mentor keren kita!</p>

                <div class="row">
                    <div class="col-md">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
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
                                                        <img src="/ProjekAkhir/img/mentor3.png" width="110%" alt="" class="rounded-start">
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
                                    <div class="row">
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

    <!-- mentor end -->

    <!-- footer -->
    <footer>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffea4d" fill-opacity="1" d="M0,64L80,101.3zC160,139,320,213,480,213.3C640,213,800,139,960,106.7C1120,75,1280,85,1360,90.7L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>

        <div class="row bg-1">

            <div class="col-1"></div>
            <div class="col">

                <div class="row justify-content-center">
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
                        <p><a class="link-offset-2 text-dark fw-bold" href="/ProjekAkhir/aboutus-login.php">Tentang Kami</a></p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>