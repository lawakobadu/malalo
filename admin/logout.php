<?php 
 
session_start();
session_destroy();

echo "<script>alert('Anda sudah logout dari sistem');window.location='/malalo/admin/'</script>";
 
?>