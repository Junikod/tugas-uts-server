<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,PATCH,PUT,DELETE,OPTIONS");

include "db.php";
if (isset($_POST['update'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
   

    require_once("db.php");
    $q = mysqli_query($con, "UPDATE `gudang` SET `nama_barang`='$nama_barang',`harga`='$harga',`jumlah`='$jumlah' where `id_barang`='$id_barang'");
    if ($q)
        echo "success";
    else
        echo "error";
}
