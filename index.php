<?php
require 'functions.php';

$ikan = query("SELECT * FROM tbl_ikan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Kasus Ikan bapak Albi</title>
</head>
<body>
<h1>daftar ikan</h1>

<table border="1" cellpadding="10" cellspacing="0">
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
            <a href="">ubah</a>
            <a href="">hapus</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>