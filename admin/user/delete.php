<?php
session_start();
include_once("../../config.php");
 
$id = $_GET['id'];
 
$result = mysqli_query($conn, "DELETE FROM users WHERE id=$id");
 
$_SESSION['alert'] = "Data berhasil dihapus";
header("Location: /malalo/admin/user/");
?>