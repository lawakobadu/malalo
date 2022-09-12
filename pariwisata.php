<?php
require_once ('config.php');
$sql = "SELECT * FROM profil WHERE id=1";
$res = $conn->query($sql);
$data = $res -> fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Css -->
    <link rel="stylesheet" href="css/style3.css">
    
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/bfa0fbe579.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Visi dan Misi - Nagari Guguk Malalo</title>
</head>
<body>
    <header>
        <a href="#" class="logo">Nagari Guguk Malalo</a>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li class="nav-item dropdown text-white fw-700">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Profil
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="visi.php">Visi Misi</a></li>
                    <li><a class="dropdown-item" href="sejarahN.php">Sejarah Nagari</a></li>
                    <li><a class="dropdown-item" href="sejarahP.php">Sejarah Pemerintahan</a></li>
                    <li><a class="dropdown-item" href="letak.php">Letak Topografi</a></li>
                    <li><a class="dropdown-item" href="struktur.php">Struktur Organisasi</a></li>
                    <li><a class="dropdown-item" href="pelayanan.php">Pelayanan</a></li>
                </ul>
            </li>
            <li><a href="berita.php">Berita</a></li>
            <li class="nav-item dropdown text-white fw-700">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Kondisi
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="sosial.php">Sosial</a></li>
                    <li><a class="dropdown-item" href="ekonomi.php">Ekonomi</a></li>
                </ul>
            </li>
            <li><a href="sarana.php">Sarana dan Prasarana</a></li>
            <li><a href="pariwisata.php">Pariwisata</a></li>
        </ul>
    </header>

    <section class="content">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="img/video.mp4" type="video/mp4">
        </video>
        
        <div class="text-center title">
            <h1 class="fw-700 text-white">Enjoy Your Holiday <br> in Tourism Malalo</h1>
            <p class="fw-lighter text-white">Lupakan semua rasa penatmu yang ada dipikiran, datanglah ke Nagari Malalo bersama orang kesayanganmu</p>
            <a class="btn btn-blue text-white" href="#content2"><h3 class="fw-bold p-1">Discover</h3></a>
        </div>
    </section>
    
    <section class="banner" id="content2">
        <div class="container-fluid text-center">
            <div class="mt-5 p-5 row g-2">
                <div class="col-6">
                    <img src="img/tangkayo1.jpg" alt="">
                </div>
                <div class="col-6">
                    <h1 class="ms-5 text-start fw-700">Tangkayo Eco Park</h1>
                    <h3 class="ms-5 text-start">Nagari Padang Laweh Malalo, Kecamatan Batipuh Selatan, Kabupaten Tanah Datar, Sumatera Barat</h3>
                </div>
                <div class="col-6">
                    <p class="text-start">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus necessitatibus quam, porro labore fugit consequuntur accusamus quo cumque neque quaerat odio mollitia qui nemo vero iure laudantium, quasi minus quibusdam placeat! Obcaecati distinctio asperiores ut facilis quia. Id nemo cumque quibusdam expedita! Tempora tempore porro facilis enim culpa accusamus iste.</p>
                </div>
                <div class="col-6">
                    <img src="img/tangkayo2.jpg" alt="">
                </div>
            </div>

            <h1 class="fw-700 mt-4 text-center">Foto lainnya</h1>

            <div class="row">
                <div class="col">
                    <img src="img/tangkayo3.jpg" alt="" class="mt-3 rounded-4">
                </div>
                <div class="col">
                    <img src="img/tangkayo3.jpg" alt="" class="mt-3 rounded-4">
                </div>
                <div class="col">
                    <img src="img/tangkayo3.jpg" alt="" class="mt-3 rounded-4">
                </div>
            </div>
        </div>

        <footer class="py-4 mt-4">
            <div class="container-fluid px-4">
                <div class="ms-5 d-flex align-items-center justify-content-between small">
                    <div class="text-white">
                    © 2022 All rights reserved. -- <a class="text-white" href="#">Privacy Policy</a> - <a class="text-white" href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </section>

<script>
    document.querySelector("#content2").forEach(anchor => {
    anchor.addEventListener("click" ,function(e){
        e.preventDefault();
        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior : "smooth"
        });
    });
});
</script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>