<?php
session_start();
include_once("../../config.php");
 
$id = $_REQUEST['id'];
$id_jenis	= $_REQUEST['id_jenis'];
 
$result = mysqli_query($conn, "DELETE FROM sarana WHERE id=$id");
 
$_SESSION['alert'] = "Data berhasil dihapus";
header("Location: /malalo/admin/sarana/detail.php?id={$id_jenis}");
?>