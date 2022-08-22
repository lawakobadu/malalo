<?php
require_once ('config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM berita WHERE id='$id'";
$res = $conn->query($sql);
while($data = $res -> fetch_assoc()){
    $judul = $data['judul'];
    $tanggal = $data['tanggal'];
    $author = $data['author'];
    $isi =  $data['isi'];
    $foto = $data['foto'];
  }
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

    <section class="home_section">
        <div class="home_content">
            <div class="container">
                <div class="content p-4">
                    <div class="card shadow rounded-4" style="border: none;">
                        <div class="card-body p-5">
                            <h3 class="fw-700">Berita</h3>
                            <div class="row text-center justify-content-center">
                                <h3 class="fw-700" style="color: #2C89C5;"><?php echo $judul; ?></h3>
                                <small><?php echo strftime('%A, %d %B %Y',strtotime($tanggal)); ?></small>
                                <small class="mb-4 float-start">Author : <?php echo $author; ?></small>
                                <img class="mt-4 mb-4 row img-fluid" src="admin/berita/upload/<?php echo $foto; ?>" style="width: 500px; height: 300px;" alt="Berita">
                            </div>
                            <p class="justify-content-start"><?php echo $isi; ?></p>
                            <a href="index.php" class="btn btn-danger float-start">Kembali</a>
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

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>