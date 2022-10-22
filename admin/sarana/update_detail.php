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

    $result = mysqli_query($conn, "SELECT sarana.*, jenis_sarana.* FROM sarana INNER JOIN jenis_sarana ON (sarana.id_jenis=jenis_sarana.id) WHERE sarana.id='$id'");

    while($row = mysqli_fetch_array($result))
    {
        $id = $row['id'];
        $id_jenis = $row['id_jenis'];
        $nama_jenis = $row['nama_jenis'];
        $nama = $row['nama'];
        $alamat = $row['alamat'];
        $xx = $row['foto'];
    }
?>
<?php
include_once("../../config.php");
 
if(isset($_POST['simpan']))
{	
    $id = $_POST['id'];
    
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];

    if($_FILES['foto']['error'] === TRUE){
		$_SESSION['alert-gagal'] = "Gambar tidak ada!";
		header("Location: /malalo/admin/sarana/detail.php?id={$id_jenis}");
	}else{
		$fileName = $_FILES['foto']['name'];
		$fileSize = $_FILES['foto']['size'];
		$tmpName = $_FILES['foto']['tmp_name'];

		$validImageExtension = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG'];
		$imageExtension = explode('.', $fileName);
		$imageExtension = strtolower(end($imageExtension));
		if(!in_array($imageExtension, $validImageExtension)){
			$_SESSION['alert-gagal'] = "Ektensi gambar tidak diperbolehkan!";
			header("Location: /malalo/admin/sarana/detail.php?id={$id_jenis}");
		}else if($fileSize > 10044070){
			$_SESSION['alert-gagal'] = "Ukuran gambar melebihi 10MB!";
			header("Location: /malalo/admin/sarana/detail.php?id={$id_jenis}");
		}else{
			$newImageName = uniqid();
			$newImageName .= '.' . $imageExtension;

			move_uploaded_file($tmpName, 'upload/'.$newImageName);
			$sql = "UPDATE sarana SET nama='$nama', alamat='$alamat', foto='$newImageName' WHERE id='$id'";
			mysqli_query($conn, $sql);
			$_SESSION['alert'] = "Data detail sarana berhasil diupdate";
			header("Location: /malalo/admin/sarana/detail.php?id={$id_jenis}");
		}
	}
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
    
    <title>Update - Detail Sarana dan Prasarana</title>
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
                            <div class="float-start mb-4" style="border-bottom: 2px solid rgba(71, 139, 202, 0.6); width: auto;"> <h5 class="fw-700">Form Edit Detail Sarana</h5></div>
                        </div>
                            <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Sarana</label>
                                    <input name="nama" type="text" value="<?php echo $nama; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">Jenis Sarana</label>
                                    <input name="id_jenis" type="text" value="<?php echo $nama_jenis; ?>" class="form-control" id="exampleFormControlInput2" readonly required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Alamat</label>
                                    <textarea name="alamat" class="form-control"><?php echo $alamat; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Foto</label>
                                    <div class="mb-3">
                                        <img src="upload/<?php echo $xx; ?>" width="200px"><br><br>
                                    </div>
                                    <input name="foto" class="form-control" type="file" id="formFile" required>
                                    <small class="text-danger">Ukuran foto maksimal 10MB</small>
                                </div>
                                <button type="submit" name="simpan" class="btn btn-success float-end">Simpan</button>
                                <a href="detail.php?id=<?php echo $id_jenis; ?>" class="btn btn-danger float-start">Kembali</a>
                            </form>
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