<?php
require 'config.php';
$query  = viewData("SELECT * FROM tabellatihan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<style>
body {background-color: cyan;}
</style>
<h1 style="color:black;">CALON SISWA</h1>
    <table class="table table-hover table-light table-bordered border-dark">
        <tr>
        <th class="text-bg-primary">Nama</th>
        <th class="text-bg-primary">Tmptlahir</th>
        <th class="text-bg-primary">Tanggallahir</th>
        <th class="text-bg-primary">Agama</th>
        <th class="text-bg-primary">J.Kelamin</th>
        <th class="text-bg-primary">Alamat</th>
        <th class="text-bg-primary">Aksi</th>
        </tr>
        <?php foreach ($query as $row) : ?>
        <tr>
          <td><?= $row['nama'] ?></td>
            <td><?= $row['tmptlahir'] ?></td>
            <td><?=$row['tanggallahir'] ?></td>
            <td><?= $row['agama'] ?></td>
            <td><?= $row['jeniskelamin'] ?></td>
            <td><?= $row['alamat'] ?></td>
            
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal
">Hapus</button>
<a href="edit.php?id=<?=$row['id']?>" button type="button" onclick="javascript:alert('Anda akan mengubah data yang tersimpan');" class="btn btn-primary">Edit</button>
<a href="upload.php?id=<?=$row['id']?>"button type="button" class="btn btn-success">Upload</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">PERINGATAN!!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>DATA AKAN TERHAPUS PERMANEN</p>
        <p> Apakah tetap ingin hapus?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="hapus.php?id=<?=$row['id']?>"><button type="button" class="btn btn-primary">Tetap Hapus</button>
      </div>
    </div>
  </div>
</div>

</div>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    <a href="form-add.php"><button type="button" class="btn btn-dark" img src="img/download.png">Add Data</button></a>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
