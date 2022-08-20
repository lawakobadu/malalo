<?php
include ("../../config.php");
	if (isset($_POST['simpan'])) 
	{
		$visi = $_POST['visi'];
		$misi = $_POST['misi'];
		
		$sql="UPDATE profil SET visi = '$visi', misi = '$misi'";

		if ( $conn->query($sql) === TRUE ) 
		{
			// $_SESSION['status'] = "0";
			session_start();
			$_SESSION['alert'] = "Visi-Misi Nagari Berhasil Diupdate!";
			header("Location: /malalo/admin/visi/");
		} 
		else 
		{
			// $_SESSION['status'] = "1";
			$_SESSION['alert-gagal'] = "Visi-Misi Nagari Gagal Diupdate!";
			header("Location: /malalo/admin/visi/");
		}
	}
?>