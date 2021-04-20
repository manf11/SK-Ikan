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
function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM tbl_ikan WHERE id = $id");

    return mysqli_affected_rows($conn);

}
function ubah($data){
    global $conn;

    $id = $data["id"];
    $namaikan = htmlspecialchars($data["nama_ikan"]);
    $kategori = htmlspecialchars($data["kategori_ikan"]);
    $jumlah = htmlspecialchars($data["jumlah_ikan"]);
    $harga = htmlspecialchars($data["harga_ikan"]);

    $query = "UPDATE tbl_ikan set
                nama_ikan = '$namaikan',
                kategori_ikan = '$kategori',
                jumlah_ikan = '$jumlah',
                harga = '$harga'
                    WHERE id = $id";

    mysqli_query ($conn,$query);
    return mysqli_affected_rows($conn);


}
?>