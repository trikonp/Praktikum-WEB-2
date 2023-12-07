<?php

class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "pengiriman_barang";
    var $koneksi;

    function getKoneksi()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        if (!$this->koneksi) {
            die("Koneksi tidak ditemukan : " . mysqli_connect_error());
        }
        return $this->koneksi;
    }
}
