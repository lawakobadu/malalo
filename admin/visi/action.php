<?php
	if (isset($_POST['simpan'])) 
	{
		$visi = $_POST['visi'];
		$misi = $_POST['misi'];
		
		$sql="UPDATE profil SET visi = '$visi', misi = '$misi'";

		if ( $conn->query($sql) === TRUE ) 
		{
			$_SESSION['status'] = "0";
			$_SESSION['pesan'] = "Visi-Misi Kelurahan Berhasil Diupdate!";
			header("Location: /malalo/admin/visi.index");
		} 
		else 
		{
			$_SESSION['status'] = "1";
			$_SESSION['pesan'] = "Visi-Misi Kelurahan Gagal Diupdate!";
			header("Location: /malalo/admin/visi.index");
		}
	}
?>