<?php
session_start();
if(isset($_SESSION['login'])){
    echo "<script>alert('Anda sudah login ke dalam sistem');window.location='/malalo/admin/home.php'</script>";

}

if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda harus login dulu ke dalam sistem');window.location='/malalo/admin/'</script>";
}
?>
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

    <!-- Chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    
    <title>Dashboard</title>
</head>
<body>
<?php
include('sidebar.php');

$sql = "SELECT * FROM users";
$res = $conn->query($sql);

$sql2 = "SELECT * FROM jenis_sarana";
$res2 = $conn->query($sql2);
?>
    <section class="home_section">
        <div class="home_content">
            <i class="fa-solid fa-bars fa-2xl"></i>
            <span class="text">Selamat Datang, <?php echo $_SESSION['username']; ?></span>
        </div>

        <div class="container">
            <div class="content p-4">
                <h3 class="fw-700 mb-4">Dashboard</h3>
                <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                    <?php while ($data2 = $res2->fetch_assoc()) { ?>
                        <div class="col">
                            <div class="card shadow rounded-4" style="border: none;">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col">
                                            <i class="fa-4x fa-solid fa-building-columns"></i>
                                        </div>
                                        <div class="text-end col">
                                            <h2>10</h2>
                                            <small><?php echo $data2['nama_jenis']; ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="card shadow rounded-4" style="border: none;">
                            <div class="card-body p-5">
                                <canvas id="pie-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow rounded-4" style="border: none;">
                            <div class="card-body p-5">
                                <canvas id="bar-chart-grouped" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-8">
                        <div class="card shadow rounded-4" style="border: none;">
                            <div class="card-body p-5">
                                <h3 class="fw-700 mb-4">Penduduk Wali Nagari</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Warga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Ahmad Fadli Ramadahan</td>
                                                <td>Duo Koto</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Fadli</td>
                                                <td>Duo Koto</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card shadow rounded-4" style="border: none;">
                            <div class="card-body p-5">
                                <h3 class="fw-700 mb-4">Data user</h3>
                                <?php while ($data = $res->fetch_assoc()) { ?>
                                <div class="mt-3 d-flex">
                                    <a href="detail_profil.php?id=<?php echo $data['id'];  ?>"><img src="user/upload/<?php echo $data['foto']; ?>" class="rounded-circle" alt="Foto" style="width: 70px; height: 70px;"></a>
                                    <div class="ms-2 col">
                                        <p><?php echo $data['name']; ?></p>
                                        <small class="fw-bold"><?php echo $data['jabatan']; ?></small>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="py-4 mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-white">
                    © 2022 All rights reserved. -- <a class="text-white" href="#">Privacy Policy</a> - <a class="text-white" href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </section>

<script src="/malalo/js/script.js"></script>
<script src="/malalo/js/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>