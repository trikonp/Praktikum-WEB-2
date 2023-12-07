<?php

include_once '../../models/Pengiriman.php';

class PengirimanController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Pengiriman($db);
    }

    public function getAllPengiriman()
    {
        return $this->model->getAllPengiriman();
    }

    public function createPengiriman($id_pengiriman, $tanggal, $pengirim, $no_hp, $penerima, $nohp_penerima, $alamat, $barang, $berat, $harga, $status)
    {
        return $this->model->createPengiriman($id_pengiriman, $tanggal, $pengirim, $no_hp, $penerima, $nohp_penerima, $alamat, $barang, $berat, $harga, $status);
    }

    public function getPengirimanById($id)
    {
        return $this->model->getPengirimanById($id);
    }

    public function updatePengiriman($id, $id_pengiriman, $tanggal, $pengirim, $no_hp, $penerima, $nohp_penerima, $alamat, $barang, $berat, $harga, $status)
    {
        return $this->model->updatePengiriman($id, $id_pengiriman, $tanggal, $pengirim, $no_hp, $penerima, $nohp_penerima, $alamat, $barang, $berat, $harga, $status);
    }

    public function deletePengiriman($id)
    {
        return $this->model->deletePengiriman($id);
    }
}