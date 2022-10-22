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
    <!-- <link rel="stylesheet" href="../css/sidebar.css"> -->
    
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/bfa0fbe579.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Read - Detail Sarana dan Prasarana</title>
</head>
<body>
<?php
include('../sidebar.php');
include('../../config.php');

$id = $_GET['id'];

$sql = "SELECT sarana.*, jenis_sarana.nama_jenis FROM sarana INNER JOIN jenis_sarana ON (sarana.id_jenis=jenis_sarana.id) WHERE sarana.id='$id'";
$res = $conn->query($sql);
while($data = $res -> fetch_assoc()){
    $id = $data['id'];
    $id_jenis = $data['id_jenis'];
    $nama = $data['nama'];
    $nama_jenis = $data['nama_jenis'];
    $alamat = $data['alamat'];
    $foto = $data['foto'];
  }
?>
    <section class="home_section">
        <div class="home_content">
            <i class="fa-solid fa-bars fa-2xl"></i>
            <span class="text">Selamat Datang, <?php echo $_SESSION['username']; ?></span>
        </div>

        <div class="container">
            <div class="content p-4">
                <div class="card shadow rounded-4" style="border: none;">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="float-start mb-4" style="border-bottom: 2px solid rgba(71, 139, 202, 0.6); width: auto;"> <h5 class="fw-700">Detail Sarana</h5></div>
                        </div>
                        <div class="row text-center justify-content-center">
                            <h3 class="fw-700" style="color: #2C89C5;"><?php echo $nama; ?></h3>
                            <img class="mt-4 mb-4 row img-fluid" src="upload/<?php echo $foto; ?>" style="width: 500px; height: 300px;" alt="Berita">
                        </div>
                        <div class="col-6 fw-semibold">
                                <table class="table table-borderless">
                                <tr>
                                    <td>Jenis Fasilitas</td>
                                    <td>:</td>
                                    <td><?php echo $nama_jenis; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?php echo $alamat; ?></td>
                                </tr>
                                </table>
                            </div>
                        <?php
                        echo "<a href='detail.php?id=". $id_jenis ."' class='btn btn-danger float-start'>Kembali</a>";
                        ?>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>