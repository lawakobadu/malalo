<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Css -->
    <link rel="stylesheet" href="../css/sidebar.css">
    
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/bfa0fbe579.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Home - Tanah Lapang</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo_details">
            <img src="../img/logo_tanah_datar.png" alt="" width="48" height="48">
            <span class="logo_name">Nagari Guguk Malalo</span>
        </div>
        <ul class="nav_links">
            <li>
                <a href="#">
                    <i class="fa-solid fa-grip"></i>
                    <span class="link_name">Beranda</span>
                </a>
                <ul class="sub_menu blank">
                    <li>
                        <a class="link_name" href="#">Beranda</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="icon_link">
                    <a href="#">
                        <i class="fa-solid fa-user"></i>
                        <span class="link_name">Profil</span>
                    </a>
                    <i class="fa-solid fa-chevron-down arrow"></i>
                </div>
                <ul class="sub_menu">
                    <li><a class="link_name" href="#">Profil</a></li>
                    <li><a href="#">Visi Misi</a></li>
                    <li><a href="#">Sejarah Nagari</a></li>
                    <li><a href="#">Sejarah Pemerintahan</a></li>
                    <li><a href="#">Letak Topografi</a></li>
                    <li><a href="#">Struktur Organisasi</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-newspaper"></i>
                    <span class="link_name">Berita</span>
                </a>
                <ul class="sub_menu blank">
                    <li>
                        <a class="link_name" href="#">Berita</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="icon_link">
                    <a href="#">
                        <i class="fa-solid fa-globe"></i>
                        <span class="link_name">Kondisi</span>
                    </a>
                    <i class="fa-solid fa-chevron-down arrow"></i>
                </div>
                <ul class="sub_menu">
                    <li><a class="link_name" href="#">Kondisi</a></li>
                    <li><a href="#">Sosial</a></li>
                    <li><a href="#">Ekonomi</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-building"></i>
                    <span class="link_name">Sarana</span>
                </a>
                <ul class="sub_menu blank">
                    <li>
                        <a class="link_name" href="#">Sarana</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-mountain"></i>
                    <span class="link_name">Pariwisata</span>
                </a>
                <ul class="sub_menu blank">
                    <li>
                        <a class="link_name" href="#">Pariwisata</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-address-card"></i>
                    <span class="link_name">Admin</span>
                </a>
                <ul class="sub_menu blank">
                    <li>
                        <a class="link_name" href="#">Admin</a>
                    </li>
                </ul>
            </li>
            <li>
            <div class="profile_details">
                <div class="profile_content">
                    <img src="../img/fadli.jpg" alt="Foto">
                </div>
                    <div class="name_job">
                        <div class="profile_name">Ahmad Fadli Ramadhan</div>
                        <div class="job">Programmer</div>
                    </div>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </div>
            </li>
        </ul>
    </div>

    <section class="home_section">
        <div class="home_content">
            <i class="fa-solid fa-bars fa-2xl"></i>
            <span class="text">Selamat Datang, ...</span>
        </div>

        <?php 
        include('home.php');
        ?>
    </section>

<script src="../js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>