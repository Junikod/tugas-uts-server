<?php
include "db.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,PATCH,PUT,DELETE,OPTIONS");

if (isset($_GET['delete'])) {

    require_once("db.php");
    $id_barang = $_GET['id_barang'];
    $q = mysqli_query($con, "delete from `gudang` where `id_barang`='$id_barang'");
    if ($q)
        echo "success";
    else
        echo "error";
}
