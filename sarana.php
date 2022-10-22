<?php
require_once ('config.php');
$sql = "SELECT * FROM jenis_sarana";
$res = $conn->query($sql);
$data = $res -> fetch_assoc();

$sql2 = "SELECT * FROM sarana";
$res2 = $conn->query($sql2);
$data2 = $res2 -> fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Css -->
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.17/dist/css/splide.min.css">
    
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/bfa0fbe579.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.17/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
    
    <title>Sarana dan Prasarana - Nagari Guguk Malalo</title>
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

    <section class="home_section">
        <div class="home_content">
            <div class="container">
                <div class="content p-4">
                    <div class="card shadow rounded-4" style="border: none;">
                        <div class="card-body p-5">
                        <h3 class="fw-700 mb-5">Sarana dan Prasarana</h3>
                        <section id="image-carousel" class="splide" aria-label="Beautiful Images">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php while ($data2 = $res2->fetch_assoc()) { ?>
                                        <li class="splide__slide">
                                            <img src="admin/sarana/upload/<?php echo $data2['foto'] ?>" alt="">
                                        </li>
                                        <?php } ?>  
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 mt-auto">
        <div class="container-fluid px-4">
            <div class="ms-5 d-flex align-items-center justify-content-between small">
                <div class="text-white">
                © 2022 All rights reserved. -- <a class="text-white" href="#">Privacy Policy</a> - <a class="text-white" href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>

<script>
new Splide( '.splide', {
    heightRatio: 0.3,
    type: 'loop',
    autoScroll: {
        speed: 1,
    }
} ).mount( window.splide.Extensions );
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>