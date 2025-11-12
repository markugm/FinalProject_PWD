<?php
session_start();
$konek = new mysqli('localhost', 'root', '', 'project_bimbel');

if (!isset($_SESSION['uname'])) {
    header('location: login.php');
    exit();
}

$uname = $_SESSION['uname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/ProjekAkhir/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/ProjekAkhir/css/buatstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Ulasan NEORON</title>
    <style>
        body {
            padding-top: 80px;
        }

        .dropdown-toggle {
            text-decoration: none;
        }

        .dropdown-toggle::after {
            border-top-color: black;
        }

        .modal-footer {
            border: none;
            padding: 0.0rem 1rem;
        }
    </style>
</head>

<body class="bg-3">

    <nav class="navbar shadow fixed-top bg-1">
        <div class="container">
            <a class="ps-5 navbar-brand" href="http://localhost/ProjekAkhir/home-login.php">
                <img src="/ProjekAkhir/img/logo_horizontal.png" alt="logo" style="height: 70px;">
            </a>
            <ul class="nav nav-underline ms-auto">
                <li class="nav-item pt-2">
                    <a class="nav-link text-dark" href="http://localhost/ProjekAkhir/home-login.php">Home</a>
                </li>
                <li class="nav-item pt-2">
                    <a class="nav-link active" aria-current="page" href="http://localhost/ProjekAkhir/ulasan-login.php">Ulasan</a>
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
                            <li><a class="dropdown-item" href="dashboard-login.php">Profile</a></li>
                            <li><a class="dropdown-item" href="/ProjekAkhir/main/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="position-fixed bottom-0 end-0 p-5">
        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <img src="/ProjekAkhir/img/add.png" alt="" width="60"> </a>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Ulasan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="/ProjekAkhir/main/ulasan-process.php">
                    <div class="modal-body">
                        <div class="row ms-2 me-3">
                            <div class="col-2">
                                <img src="/ProjekAkhir/img/icon.jpg" alt="icon" width="100%" class="shadow-sm rounded-circle">
                            </div>
                            <div class="col">
                                <textarea name="ulasan" class="form-control shadow-sm" rows="5" placeholder="Tuliskan ulasanmu!"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pb-1">
                        <button type="button" class="btn btn-secondary shadow-sm fw-semibold" data-bs-dismiss="modal" style="border-radius: 20px;">Close</button>
                        <button type="submit" class="btn shadow-sm fw-semibold" style="border-radius: 20px; background-color: #29E2E8; border-color: #29E2E8;">Posting</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col border-aja">
                <h1 class="fw-bold mt-5"> <i class="bi bi-chat-square-quote-fill"></i> Ulasan </h1>
                <h4 class="ms-5">Sampaikan komentarmu tentang NEORON disini!</h4>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    <div class="container" width="90%">
        <div class="row justify-content-evenly m-4">
            <?php
            $stmt = $konek->prepare("SELECT ulasan.id_ulasan, ulasan.ulasan, datadiri.nama_siswa, datadiri.uname, datadiri.kelas 
                                        FROM ulasan JOIN datadiri ON ulasan.id_siswa = datadiri.id_siswa ORDER BY ulasan.id_ulasan DESC");
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-5 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row">
                    <div class="col-2 ms-3">
                        <img src="/ProjekAkhir/img/icon.jpg" alt="icon" width="100%" class="shadow-sm rounded-circle">
                    </div>
                    <div class="col">
                        <h5 class="card-title">' . htmlspecialchars($row['nama_siswa']) . '</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">@' . htmlspecialchars($row['uname']) . '</h6>
                    </div>';
                // Tampilkan tombol delete hanya jika username saat ini sesuai dengan username dari ulasan
                if ($uname == $row['uname']) {
                    echo '<div class="col text-end">
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" data-id-ulasan="' . htmlspecialchars($row['id_ulasan']) . '">Delete</button>
              </div>';
                }
                echo '  </div>
            <p class="card-text m-3">' . htmlspecialchars($row['ulasan']) . '</p>
        </div>
        <div class="card-footer text-center" style="background-color: #FFFF8F;">
            Kelas ' . htmlspecialchars($row['kelas']) . '
        </div>
    </div>
</div>';
            }

            $stmt->close();
            $konek->close();
            ?>

        </div>
    </div>

    <!-- Modal Konfirmasi Penghapusan -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form id="deleteForm" method="POST" action="/ProjekAkhir/main/delete-process.php">
                        <input type="hidden" name="id_ulasan" id="deleteIdUlasan">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var confirmDeleteModal = document.getElementById('confirmDeleteModal');
            confirmDeleteModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var idUlasan = button.getAttribute('data-id-ulasan');

                var deleteForm = document.getElementById('deleteForm');
                var deleteIdUlasan = document.getElementById('deleteIdUlasan');
                deleteIdUlasan.value = idUlasan;
            });
        });
    </script>

</body>

</html>