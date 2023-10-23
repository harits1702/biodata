<?php
require 'conn.php';
    if(isset($_POST['ubah'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $tmptlahir = $_POST['tmptlahir'];
        $tanggallahir = $_POST['tanggallahir'];
        $agama = $_POST['agama'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $alamat = $_POST['alamat'];
        
        $update = mysqli_query($koneksi, "UPDATE tabellatihan SET nama='$nama' WHERE id='$id'");
        if($update){
            echo" <script>alert('Anda berhasil mengubah');
            document.location='index.php'</script>";
        }
    }
?>
