<?php
require 'conn.php';
$nama = $_POST['nama'];
$tmptlahir = $_POST['tmptlahir'];
$tanggallahir = $_POST['tanggallahir'];
$agama = $_POST['agama'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$insert = mysqli_query($koneksi, "INSERT INTO tabellatihan (nama, tmptlahir, tanggallahir, agama, jeniskelamin, alamat) VALUES 
('$nama', '$tmptlahir', '$tanggallahir', '$agama', '$jeniskelamin', '$alamat')");
var_dump($_POST);
 if($insert){
    echo" <script>alert('Anda telah Berhasil Menyimpan');
    document.location='index.php'</script>";
}else{
    echo" <script>alert('Anda gagal menyimpan Menyimpan');
    document.location='add.php'</script>";
}

?>
