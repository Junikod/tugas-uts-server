<?php
class Produk
{

    private $conn;

    public $id_barang;
    public $nama_barang;
    public $harga;
    public $jumlah;
   
    public function __construct($db)
    {
        $this->conn = $db;
    }


    function readID()
    {

        // query to read single record
        $query = "SELECT * FROM gudang    WHERE id_barang = ? LIMIT 0,1";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // bind id_produk of product to be updated
        $stmt->bindParam(1, $this->id_barang);

        // execute query
        $stmt->execute();

        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values to object properties

        $this->id_barang = $row['id_barang'];
        $this->nama_barang = $row['nama_barang'];
        $this->harga = $row['harga'];
        $this->jumlah = $row['jumlah'];
       
    }
}
