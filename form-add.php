<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form add</title>
</head>
<style>
body {background-color: yellow;}
h1   {color: yellow;}
p    {color: red;}
</style>
</head>
<body>
    
    <form action="controllersimpan.php" method="POST">
    <h1 style="color:black;">CALON SISWA</h1>
    <input type="text" placeholder="Nama" name="nama"><br>
    <input type="text" placeholder="Tempat Lahir" name="tmptlahir"><br>
    <input type="date" placeholder="Tanggal Lahir" name="tanggallahir"><br>
    <input type="text" placeholder="Agama" name="agama"><br>
    <input type="text" placeholder="Jenis Kelamin" name="jeniskelamin"><br>
    <input type="text" placeholder="Alamat" name="alamat"><br>
    <button type="submit" name="ubah">SIMPAN</button> <hr>
    </form>
</body>
</html>
