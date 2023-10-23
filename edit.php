<?php
require 'conn.php';
$id=$_GET['id'];
$data= mysqli_query($koneksi,"SELECT * FROM tabellatihan WHERE id='$id'");
$detail= mysqli_fetch_array($data);
$nama= $detail['nama'];
$tmptlahir= $detail['tmptlahir'];
$tanggallahir= $detail['tanggallahir'];
$agama= $detail['agama'];
$jeniskelamin= $detail['jeniskelamin'];
$alamat= $detail['alamat'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<style>
body {background-color: yellow;}
h1   {color: yellow;}
p    {color: red;}
</style>
</head>
<body>
    <form action="controllerubah.php" method="POST">
    <h1 style="color:black;">BIO DATA</h1>
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="text" placeholder="Nama" name="nama" value="<?=$nama?>"><br>
    <input type="text" placeholder="Tempat Lahir" name="tmptlahir" value="<?=$tmptlahir?>"><br>
    <input type="date" placeholder="Tanggal Lahir" name="tanggallahir" value="<?=$tanggallahir?>"><br>
    <input type="text" placeholder="Agama" name="agama" value="<?=$agama?>"><br>
    <input type="text" placeholder="Jenis Kelamin" name="jeniskelamin" value="<?=$jeniskelamin?>"><br>
    <input type="text" placeholder="Alamat" name="alamat" value="<?=$alamat?>"><br>
    <button type="submit" name="ubah">SIMPAN</button> <hr>
    </form>
</body>
</html>
