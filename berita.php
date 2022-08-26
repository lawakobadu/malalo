<?php
require_once ('config.php');
setlocale(LC_ALL, 'id-ID', 'id_ID');
$batas = 5;
$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

$previous = $halaman - 1;
$next = $halaman + 1;

$sql = mysqli_query($conn,"SELECT * FROM berita");
$jumlah_data = mysqli_num_rows($sql);
$total_halaman = ceil($jumlah_data / $batas);

$sql2 = "SELECT * FROM berita LIMIT $halaman_awal, $batas";
$res = $conn->query($sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Css -->
    <link rel="stylesheet" href="css/style2.css">
    
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/bfa0fbe579.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Berita - Nagari Guguk Malalo</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Css -->
    <link rel="stylesheet" href="css/style2.css">
    
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/bfa0fbe579.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Berita - Nagari Guguk Malalo</title>
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
                    <?php while ($data = $res->fetch_assoc()) { ?>
                    <div class="d-flex position-relative mt-5">
                        <img src="admin/berita/upload/<?php echo $data['foto']; ?>" style="width: 250px;" class="img-fluid flex-shrink-0 me-3" alt="Berita">
                        <div>
                            <h3 class="fw-700 mt-0" style="color: #2C89C5;"><?php echo $data['judul']; ?></h3>
                            <small class="bg-light"><i class="fa-solid fa-calendar-days me-2"></i><?php echo strftime('%A, %d %B %Y',strtotime($data['tanggal'])); ?> | <i class="fa-solid fa-user me-2"></i><?php echo $data['author']; ?></small>
                            <p class="mt-2"><?php echo substr($data['isi'], 0, 200)?> ...</p>
                            <a href="detail_berita.php?id=<?php echo $data['id']?>" class="mt-2 stretched-link bg-grey btn text-decoration-none text-black p-2"><small>Baca lebih lanjut</small></a>
                        </div>
                    </div>
                    <hr>
                    <?php } ?>
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

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>