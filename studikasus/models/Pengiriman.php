<?php

class Pengiriman
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllPengiriman()
    {
        $query = "SELECT * FROM pengiriman";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createPengiriman($id_pengiriman, $tanggal, $pengirim, $no_hp, $penerima, $nohp_penerima, $alamat, $barang, $berat, $harga, $status)
    {
        $query = "INSERT INTO pengiriman (id_pengiriman, tanggal, pengirim, no_hp, penerima, nohp_penerima, alamat, barang, berat, harga, status) VALUES('$id_pengiriman','$tanggal','$pengirim','$no_hp','$penerima','$nohp_penerima','$alamat','$barang','$berat','$harga','$status')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getPengirimanById($id)
    {
        $query = "SELECT * FROM pengiriman where id = '$id'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updatePengiriman($id, $id_pengiriman, $tanggal, $pengirim, $no_hp, $penerima, $nohp_penerima, $alamat, $barang, $berat, $harga, $status)
    {
        $query = "UPDATE pengiriman set id_pengiriman='$id_pengiriman', tanggal='$tanggal', pengirim='$pengirim', no_hp='$no_hp', penerima='$penerima', nohp_penerima='$nohp_penerima', alamat='$alamat', barang='$barang', berat='$berat', harga='$harga', status='$status' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePengiriman($id)
    {
        $query = "DELETE FROM pengiriman WHERE id = '$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}