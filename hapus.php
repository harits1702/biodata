<?php
require 'conn.php';
$id=$_GET['id'];
$delete = mysqli_query($koneksi, "DELETE FROM tabellatihan WHERE id='$id'");
echo " <script>alert ('Berhasil Dihapus');
    document.location='index.php'</script>";
?>
