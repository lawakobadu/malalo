<?php
require_once ('config.php');
$sql = "SELECT * FROM pariwisata";
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
    
    <title>Pariwisata - Nagari Guguk Malalo</title>
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
    
    <section class="body">
        <div class="container">
            <div class="mt-5 text-start w-50">
                <h1 class="fw-700 text-white text-uppercase">halo</h1>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero officiis voluptate maiores non, ipsam soluta recusandae aperiam incidunt impedit ex dignissimos? Hic necessitatibus fuga officiis alias sed nesciunt dolorem, inventore beatae fugit suscipit sint nobis. Modi vel obcaecati minus labore? Magnam aperiam officia nostrum non similique quam explicabo veniam obcaecati.</p>
                <a class="btn btn-blue text-white" href="#"><h5 class="p-1">Discover</h5></a>
            </div>
            <div class="text-white text-end mb-4">
                <h1>Pariwisata</h1>
            </div>
            <div class="float-end background">
                <div class="background-change" onclick="background1()"><p class="position-absolute p ms-2 text-white">tangkayo1</p><img src="img/tangkayo1.jpg" alt=""></div>
                <div class="background-change" onclick="background2()"><p class="position-absolute p ms-2 text-white">tangkayo2</p><img src="img/tangkayo2.jpg" alt=""></div>
                <div class="background-change" onclick="background3()"><p class="position-absolute p ms-2 text-white">tangkayo3</p><img src="img/tangkayo3.jpg" alt=""></div>
                <div class="text-white">
                    <i class="fa-solid fa-2x fa-circle-chevron-left"></i>
                    <i class="fa-solid fa-2x fa-circle-chevron-right"></i>
                </div>
            </div>
            <div class="d-flex icon justify-content-around">
                <a href="#" class="text-white"><i class="me-2 fa-xl fa-brands fa-facebook"></i></a>
                <a href="#" class="text-white"><i class="me-2 fa-xl fa-brands fa-twitter"></i></a>
                <a href="#" class="text-white"><i class="me-2 fa-xl fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </section>

<script>
    function background1() {
        var body = document.querySelector(".body");
        body.style.transition = "all 0.5s ease";
        body.style.background ="url('img/tangkayo1.jpg') center center / cover";
    }
    function background2() {
        var body = document.querySelector(".body");
        body.style.transition = "all 0.5s ease";
        body.style.background ="url('img/tangkayo2.jpg') center center / cover";
    }
    function background3() {
        var body = document.querySelector(".body");
        body.style.transition = "all 0.5s ease";
        body.style.background ="url('img/tangkayo3.jpg') center center / cover";
    }
</script>
<!-- <script src="js/script.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>