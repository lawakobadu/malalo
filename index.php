<?php
require_once ('config.php');
setlocale(LC_ALL, 'id-ID', 'id_ID');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/bfa0fbe579.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Home - Nagari Guguk Malalo</title>
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

    <section class="banner">
        <div class="content text-center title">
            <h1 class="text-white fw-700">Kabupaten Tanah Datar Kecamatan Batipuh Selatan Nagari Guguk Malalo</h1>
            <a class="btn btn-blue text-white mt-3" href="#content2"><h3 class="fw-700 p-1">Our Village</h3></a>
        </div>
    </section>

    <section class="mt-5" id="content2">
        <div class="container mt-5">
            <div class="content">
                <div class="card mb-3" style="max-width: 700px; border: none;">
                    <div class="row g-0">
                        <div class="col-md-6">
                        <img data-aos="fade-right" src="img/kantor.png" class="img-fluid position-absolute" alt="Kantor">
                        </div>
                        <div class="col-md-6">
                        <div data-aos="fade-left" class="card-body p-5 position-relative" style="border: none; background: #e5e5e5; min-width: 685px; margin-left: 40%; margin-top: 15%;">
                            <h1 class="card-title fw-700">Guguak Malalo, Batipuh Selatan, Tanah Datar</h1>
                            <p class="mt-4 card-text">Guguak Malalo merupakan salah satu nagari yang termasuk ke dalam wilayah kecamatan Batipuh Selatan, Kabupaten Tanah Datar, Provinsi Sumatra Barat, Indonesia. Nagari ini terletak di dekat Batusangkar, ibu kota dari kabupaten Tanah datar.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="content">
            <div class="container"><br><br><br>
            <h1 class="fw-700 text-center">Data Penduduk</h1>
                <div data-aos="fade-up" class="row justify-content-around text-center ">
                    <div class="card my-3" style="width: 18rem; border: none; background: #e5e5e5; border-radius: 20px;">
                        <div class="card-body p-4">
                            <i class="fa-solid fa-people-group fa-3x"></i>
                            <h3 class="mt-3 fw-700 card-title">Jumlah Penduduk</h3>
                            <p class="card-text fs-1">200</p>
                        </div>
                    </div>
                    <div class="card my-3" style="width: 18rem; border: none; background: #e5e5e5; border-radius: 20px;">
                        <div class="card-body p-4">
                            <i class="fa-solid fa-person fa-3x"></i>
                            <h3 class="mt-3 fw-700 card-title">Laki-laki</h3>
                            <p class="card-text fs-1">100</p>
                        </div>
                    </div>
                    <div class="card my-3" style="width: 18rem; border: none; background: #e5e5e5; border-radius: 20px;">
                        <div class="card-body p-4">
                            <i class="fa-solid fa-person-dress fa-3x"></i>
                            <h3 class="mt-3 fw-700 card-title">Perempuan</h3>
                            <p class="card-text fs-1">100</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="content">
            <div class="container">
                <div class="text-center">
                    <h1 class="fw-700">Berita Nagari</h1>
                </div>
                <div data-aos="zoom-in" class="row row-cols-1 row-cols-md-3 g-4">
                    <?php
                    $batas = 6;
                    $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                    $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
    
                    $previous = $halaman - 1;
                    $next = $halaman + 1;
                    
                    $sql = mysqli_query($conn,"SELECT * FROM berita");
                    $jumlah_data = mysqli_num_rows($sql);
                    $total_halaman = ceil($jumlah_data / $batas);
    
                    $sql2 = "SELECT * FROM berita LIMIT $halaman_awal, $batas";
                    $res = $conn->query($sql2);
                    while ($data = $res->fetch_assoc()) { ?>
                    <div class="col">
                        <div class="card h-100">
                        <img src="admin/berita/upload/<?php echo $data['foto']; ?>" class="card-img-top" alt="Berita">
                            <div class="card-body">
                                <p class="card-text"><?php echo strftime('%A, %d %B %Y',strtotime($data['tanggal'])); ?></p>
                                <h5 class="card-title fw-700" style="color: #2C89C5;"><?php echo $data['judul']; ?></h5>
                                <p class="card-text">Author : <?php echo $data['author']; ?></p>
                                <a href="detail_berita.php?id=<?php echo $data['id']?>" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="mt-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                                <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
                            </li>
                            <?php 
                            for($x=1;$x<=$total_halaman;$x++) : ?>
                                <?php if($x == $halaman) : ?>
                                <li class="page-item active">
                                    <a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a>
                                </li>
                                <?php else : ?>
                                <li class="page-item">
                                    <a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a>
                                </li>
                                <?php endif; ?>
                            <?php endfor; ?>		
                            <li class="page-item">
                                <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <footer class="mt-5 text-white">
        <div class="content">
            <div class="container-fluid mt-5 pt-5 px-sm-3 px-md-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.6122419608387!2d100.4906707!3d-0.5823434!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd529d1d8759207%3A0x9ff57a02d75f6dee!2sPuskesmas%20Batipuh%20III!5e0!3m2!1sen!2sid!4v1659802662861!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="row pt-5 mt-5">
                    <div class="col-lg-4 col-md-6 mb-5">
                        <h1 class="footer-jdl m-0 mt-n2 text-white fw-700 ">About us</h1>
                        <p class="mt-4">Nagari Guguk Malalo adalah Nagari yang berada di Kecamatan Batipuh Selatan, Kabupaten Tanah Datar, Sumatera Barat, Indonesia</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a href="https://unand.ac.id/id/"><img src="img/logo_unand.png" alt="Logo Unand" style="width: 72px; height: 52px; margin-right: 15px;"></a>
                            <a href="https://www.instagram.com/kknnagarigugukmalalo/"><img src="img/logo_kkn.png" alt="Logo Unand" style="width: 52px; height: 52px; margin-right: 15px;"></a>
                            <a href="https://tanahdatar.go.id/index.php?mod=home"><img src="img/logo_tanah_datar.png" alt="Logo Unand" style="width: 52px; height: 52px; margin-right: 15px;"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <h1 class="footer-jdl m-0 mt-n2 text-white fw-700 ">Nagari Guguk Malalo</h1>
                        <div class="d-flex flex-column justify-content-start mt-4">
                            <a class="mb-2 text-white text-decoration-none" href="index.php"><i class="fa-solid fa-chevron-right me-2"></i>Beranda</a>
                            <a class="mb-2 text-white text-decoration-none" href="#"><i class="fa-solid fa-chevron-right me-2"></i>Profil</a>
                            <a class="mb-2 text-white text-decoration-none" href="berita.php"><i class="fa-solid fa-chevron-right me-2"></i>Berita</a>
                            <a class="mb-2 text-white text-decoration-none" href="#"><i class="fa-solid fa-chevron-right me-2"></i>Kondisi</a>
                            <a class="mb-2 text-white text-decoration-none" href="sarana.php"><i class="fa-solid fa-chevron-right me-2"></i>Sarana dan Prasarana</a>
                            <a class="mb-2 text-white text-decoration-none" href="pariwisata.php"><i class="fa-solid fa-chevron-right me-2"></i>Pariwisata</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <h1 class="footer-jdl m-0 mt-n2 text-white fw-700 ">Hubungi Kami</h1>
                        <div class="d-flex flex-column justify-content-start mt-4">
                            <p class="mb-3"><i class="me-2 fa-xl fa-solid fa-location-dot"></i> Kecamatan Batipuh Selatan, Kabupaten Tanah Datar, Sumatera Barat </p>
                            <p class="mb-3"><i class="me-2 fa-xl fa-solid fa-phone"></i>+6282279726797</p>
                            <p class="mb-3"><i class="me-2 fa-xl fa-solid fa-envelope"></i>malalo@gmail.com</p>
                            <p class="mb-3"><i class="me-2 fa-xl fa-brands fa-youtube"></i>Nagari Guguk Malalo</p>
                            <p class="mb-3"><i class="me-2 fa-xl fa-brands fa-facebook"></i>Nagari Guguk Malalo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <hr style="width: 100%; color: #fff;">
            © Nagari Guguk Malalo. All Rights Reserved. Created by Fadli
        </div>
    </footer>

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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>