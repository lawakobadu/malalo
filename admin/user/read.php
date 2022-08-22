<?php
session_start();
if(isset($_SESSION['login'])){
    echo "<script>alert('Anda sudah login ke dalam sistem');window.location='/malalo/admin/home.php'</script>";
    exit;
}

if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda harus login dulu ke dalam sistem');window.location='/malalo/admin/'</script>";
    exit;
}

if($_SESSION['role'] !== "admin"){
    echo "<script>alert('Anda harus login sebagai admin terlebih dahulu');window.location='/malalo/admin/'</script>";
    exit;
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
    
    <title>Read - User Profile</title>
</head>
<body>
<?php
include('../sidebar.php');
include('../../config.php');

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$res = $conn->query($sql);
while($data = $res -> fetch_assoc()){
    $username = $data['username'];
    $name = $data['name'];
    $role = $data['role'];
    $nip =  $data['nip'];
    $jabatan =  $data['jabatan'];
    $foto = $data['foto'];
  }
?>
    <section class="home_section" style="height: 100vh;">
        <div class="home_content">
            <i class="fa-solid fa-bars fa-2xl"></i>
            <span class="text">Selamat Datang, <?php echo $_SESSION['username']; ?></span>
        </div>

        <div class="container">
            <div class="content p-4">
                <div class="card shadow rounded-4" style="border: none;">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="float-start mb-4" style="border-bottom: 2px solid rgba(71, 139, 202, 0.6); width: auto;"> <h5 class="fw-700">Detail User</h5></div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" style="width:250px; height:250px;" src="upload/<?php echo $foto; ?>" alt="">
                            </div>
                            <div class="col-6 fw-semibold">
                                <table class="table table-borderless">
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><?php echo $username; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?php echo $name; ?></td>
                                </tr>
                                <tr>
                                    <td>Role</td>
                                    <td>:</td>
                                    <td><?php echo $role; ?></td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>:</td>
                                    <td><?php echo $nip; ?></td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td><?php echo $jabatan; ?></td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <a href="index.php" class="mt-4 btn btn-danger float-start">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="position-fixed py-4 mt-auto">
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