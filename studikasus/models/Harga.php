<?php

class Harga
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllHarga()
    {
        $query = "SELECT * FROM harga";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createHarga($berat, $harga)
    {
        $query = "INSERT INTO harga (berat, harga) VALUES('$berat','$harga')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getHargaById($id)
    {
        $query = "SELECT * FROM harga where id = '$id'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateHarga($id, $berat, $harga)
    {
        $query = "UPDATE harga set berat='$berat', harga='$harga' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteHarga($id)
    {
        $query = "DELETE FROM harga WHERE id = '$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
