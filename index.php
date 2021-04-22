<?php
require 'functions.php';

//nampilin data tapi ngambil dari function get all
/* BEFORE sebelum dibuatkan functionnya
    $ikan = query("SELECT * FROM tbl_ikan");
 */
/* AFTER setelah dibuatkan functionnya */
$ikan = get_all('tbl_ikan');

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Study Kasus Ikan bapak Albi</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Albi Fish</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="ikantawar.php">ikan tawar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="ikanlaut.php">ikan laut</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="ikanpayau.php">ikan payau</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>

    <h1>Daftar ikan</h1>
      <a href="tambah.php" class="btn btn-primary">tambah nama ikan</a>
    <br><br/>

    <table class="table table-dark table-striped">
        <tr>
            <td>no</td>
            <td>nama Ikan</td>
            <td>kategori Ikan</td>
            <td>jumlah</td>
            <td>harga</td>
            <td>aksi</td>
        </tr>
        <?php $i=1; ?>
        <?php foreach ($ikan as $row): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nama_ikan"]?></td>
            <td><?= $row["kategori_ikan"]?></td>
            <td><?= $row["jumlah_ikan"]?></td>
            <td><?= $row["harga_ikan"]?></td>
        <td>
            <a href="ubah.php ?id=<?= $row["id"] ?>" class="btn btn-warning">ubah</a>
            <a href="hapus.php ?id=<?= $row["id"] ?>" onclick="return confirm('yakin?');" class="btn btn-danger">hapus</a>
        </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
