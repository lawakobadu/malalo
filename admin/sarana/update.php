<?php
session_start();
if(isset($_SESSION['login'])){
    echo "<script>alert('Anda sudah login ke dalam sistem');window.location='/malalo/admin/home.php'</script>";

}

if(!isset($_SESSION['username'])){
    echo "<script>alert('Anda harus login dulu ke dalam sistem');window.location='/malalo/admin/'</script>";
}
?>
<?php
    include '../../config.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM jenis_sarana WHERE id='$id'");

    while($row = mysqli_fetch_array($result))
    {
        $id = $row['id'];
        $nama = $row['nama_jenis'];
    }
?>
<?php
include_once("../../config.php");
 
if(isset($_POST['simpan']))
{	
	$id = $_POST['id'];

	$nama = $_POST['nama_jenis'];

    $sql = "UPDATE jenis_sarana SET nama_jenis='$nama' WHERE id='$id'";
    mysqli_query($conn, $sql);
    $_SESSION['alert'] = "Jenis sarana berhasil diupdate";
    header("Location: /malalo/admin/sarana/");
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
    
    <title>Update - Jenis Sarana</title>
</head>
<body>
<?php
include('../sidebar.php');
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
                            <div class="float-start mb-4" style="border-bottom: 2px solid rgba(71, 139, 202, 0.6); width: auto;"> <h5 class="fw-700">Form Edit Sarana</h5></div>
                        </div>
                            <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Jenis</label>
                                    <input name="nama_jenis" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Jenis" value="<?php echo $nama; ?>" required>
                                </div>
                                <button type="submit" name="simpan" class="btn btn-success float-end">Simpan</button>
                                <a href="index.php" class="btn btn-danger float-start">Kembali</a>
                            </form>
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