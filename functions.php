<?php

$conn = mysqli_connect("localhost","root","","db_ikan");

function get_all($tbl_ikan){
    return query("SELECT * FROM {$tbl_ikan}");
}

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows=[];
    while ($row =mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
function tambah ($data){
    global $conn;

    $namaikan = htmlspecialchars($data["nama_ikan"]);
    $kategori = htmlspecialchars($data["kategori_ikan"]);
    $jumlah = htmlspecialchars($data["jumlah_ikan"]);
    $harga = htmlspecialchars($data["harga_ikan"]);

    $query = "INSERT INTO tbl_ikan VALUES ('','$namaikan','$kategori','$jumlah','$harga')";

    mysqli_query ($conn,$query);

    return mysqli_affected_rows($conn);
}
?>