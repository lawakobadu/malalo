<?php
include_once("../../config.php");
 
if(isset($_POST['simpan']))
{	
	$id = 1;

    if($_FILES['foto']['error'] === 4){
		$_SESSION['alert-gagal'] = "Gambar tidak ada!";
		header("Location: /malalo/admin/struktur/");
	}else{
		$fileName = $_FILES['foto']['name'];
		$fileSize = $_FILES['foto']['size'];
		$tmpName = $_FILES['foto']['tmp_name'];

		$validImageExtension = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG'];
		$imageExtension = explode('.', $fileName);
		$imageExtension = strtolower(end($imageExtension));
		if(!in_array($imageExtension, $validImageExtension)){
			$_SESSION['alert-gagal'] = "Ektensi gambar tidak diperbolehkan!";
			header("Location: /malalo/admin/struktur/");
		}else if($fileSize < 1000000){
			$_SESSION['alert-gagal'] = "Ukuran gambar melebihi 10MB!";
			header("Location: /malalo/admin/struktur/");
		}else{
			$newImageName = uniqid();
			$newImageName .= '.' . $imageExtension;

			move_uploaded_file($tmpName, 'upload/'.$newImageName);
			$sql = "UPDATE profil SET struktur='$newImageName' WHERE id='$id'";
			mysqli_query($conn, $sql);
            // var_dump($sql);
			$_SESSION['alert'] = "Struktur Organisasi berhasil diupdate";
			header("Location: /malalo/admin/struktur/");
		}
	}
}