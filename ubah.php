<?php
require "functions.php";

// $id=$_GET["id"];

$ikan = get_all('tbl_ikan')[0];


if(isset($_POST["submit"])){

if (ubah($_POST)>0){
        echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = 'index.php';
                </script>
                ";
        }else{
            echo "
                <script>
                    alert('data gagal diubah');
                    document.location.href = 'index.php';
                </script>
            ";
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>form tambah</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <div class="container">
        <h1>form ubah</h1>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $ikan["id"]; ?>">
                    <div class="col-10">
                        <label for="namaikan" class="form-label">nama ikan</label>
                        <input type="text" class="form-control" name="nama_ikan" id="namaikan" required value="<?= $ikan["nama_ikan"]; ?>">
                    </div>
                    <div class="col-10">
                        <label for="kategori" class="form-label">kategori</label>
                        <input type="text" class="form-control" name="kategori_ikan" id="nama" required value="<?= $ikan["kategori_ikan"]; ?>">
                    </div>
                    <div class="col-10">
                        <label for="jumlah" class="form-label">jumlah</label>
                        <input type="text" class="form-control" name="jumlah_ikan" id="jumlah" required value="<?= $ikan["jumlah_ikan"]; ?>">
                    </div>
                    <div class="col-10">
                        <label for="harga" class="form-label">harga</label>
                        <input type="text" class="form-control" name="harga_ikan" id="harga" required value="<?= $ikan["harga_ikan"]; ?>">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit">ubah data</button>
                </form>
            </div>
  </body>
</html>