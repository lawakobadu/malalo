<?php
include ("../../config.php");
	if (isset($_POST['simpan'])) 
	{
		$sejarahN = $_POST['sejarahN'];
		
		$sql="UPDATE profil SET sejarahN = '$sejarahN'";

		if ( $conn->query($sql) === TRUE ) 
		{
			// $_SESSION['status'] = "0";
			session_start();
			$_SESSION['alert'] = "Sejarah Nagari Berhasil Diupdate!";
			header("Location: /malalo/admin/sejarahN/");
		} 
		else 
		{
			// $_SESSION['status'] = "1";
			$_SESSION['alert-gagal'] = "Sejarah Nagari Gagal Diupdate!";
			header("Location: /malalo/admin/sejarahN/");
		}
	}
?>