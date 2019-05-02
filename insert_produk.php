<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,PATCH,PUT,DELETE,OPTIONS");

include "db.php";

if (isset($_POST['submit'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
   

    require_once("db.php");

    $q = mysqli_query($con, "INSERT INTO `gudang` (`id_barang`,`nama_barang`,`harga`,`jumlah`) VALUES ('$id_barang','$nama_barang','$harga','$jumlah')");
    if ($q)
        echo "success";
    else
        echo "error";
}
