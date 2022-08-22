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
?>
<?php
    include '../config.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");

    while($row = mysqli_fetch_array($result))
    {
        $id = $row['id'];
        $username = $row['username'];
        $name = $row['name'];
        $role = $row['role'];
        $nip = $row['nip'];
        $jabatan = $row['jabatan'];
        $xx = $row['foto'];
    }
?>
<?php
include_once("../config.php");
 
if(isset($_POST['simpan']))
{	
	$id = $_POST['id'];

	$name = $_POST['name'];
	$role = $_POST['role'];
	$nip = $_POST['nip'];
	$jabatan = $_POST['jabatan'];

    if($_FILES['foto']['error'] === TRUE){
		$_SESSION['alert-gagal'] = "Gambar tidak ada!";
		header("Location: /malalo/admin/profile.php?id={$id};");
	}else{
		$fileName = $_FILES['foto']['name'];
		$fileSize = $_FILES['foto']['size'];
		$tmpName = $_FILES['foto']['tmp_name'];

		$validImageExtension = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG'];
		$imageExtension = explode('.', $fileName);
		$imageExtension = strtolower(end($imageExtension));
		if(!in_array($imageExtension, $validImageExtension)){
			$_SESSION['alert-gagal'] = "Ektensi gambar tidak diperbolehkan!";
			header("Location: /malalo/admin/profile.php?id={$id};");
		}else if($fileSize > 10044070){
			$_SESSION['alert-gagal'] = "Ukuran gambar melebihi 10MB!";
			header("Location: /malalo/admin/profile.php?id={$id};");
		}else{
			$newImageName = uniqid();
			$newImageName .= '.' . $imageExtension;

			move_uploaded_file($tmpName, 'user/upload/'.$newImageName);
			$sql = "UPDATE users SET `name`='$name', nip='$nip', jabatan='$jabatan', foto='$newImageName' WHERE id='$id'";
			mysqli_query($conn, $sql);
			$_SESSION['alert'] = "Data user berhasil diupdate";
			header("Location: /malalo/admin/profile.php?id={$id};");
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
    
    <title>Profile</title>
</head>
<body>
<?php
include('sidebar.php');
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
                            <div class="float-start mb-4" style="border-bottom: 2px solid rgba(71, 139, 202, 0.6); width: auto;"> <h5 class="fw-700">Profile</h5></div>
                        </div>
                        <div class="grid">
                            <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="form-control"  name="id" value="<?php echo $id ;?>" />
                            <div class="g-col-6">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Foto</label>
                                    <div class="mb-3">
                                        <img class="img-fluid" src="user/upload/<?php echo $xx; ?>" width="200px"><br><br>
                                    </div>
                                    <input name="foto" class="form-control" type="file" id="formFile" required>
                                    <small class="text-danger">Ukuran foto maksimal 10MB</small>
                                </div>
                            </div>
                            <div class="g-col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                                    <input name="username" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username" value="<?php echo $username; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" value="<?php echo $name; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">NIP</label>
                                    <input name="nip" type="text" class="form-control" id="exampleFormControlInput1" placeholder="NIP" value="<?php echo $nip; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                                    <input name="jabatan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jabatan" value="<?php echo $jabatan; ?>">
                                </div>
                                <div class="mb-3">
                                    <p>Role : <?php echo $role; ?></p>
                                </div>
                                <button type="submit" name="simpan" class="btn btn-success float-end">Simpan</button>
                                <a href="index.php" class="btn btn-danger float-start">Kembali</a>
                            </div>
                            </form>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>