<?php
include ("../../config.php");
	if (isset($_POST['simpan'])) 
	{
		$letak = $_POST['letak'];
		
		$sql="UPDATE profil SET letak = '$letak'";

		if ( $conn->query($sql) === TRUE ) 
		{
			// $_SESSION['status'] = "0";
			session_start();
			$_SESSION['alert'] = "Letak Topografi Nagari Berhasil Diupdate!";
			header("Location: /malalo/admin/letak/");
		} 
		else 
		{
			// $_SESSION['status'] = "1";
			$_SESSION['alert-gagal'] = "Letak Topografi Nagari Gagal Diupdate!";
			header("Location: /malalo/admin/letak/");
		}
	}
?>