<?php

include_once '../../models/Harga.php';

class HargaController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Harga($db);
    }

    public function getAllHarga()
    {
        return $this->model->getAllHarga();
    }

    public function createHarga($berat, $harga)
    {
        return $this->model->createHarga($berat, $harga);
    }

    public function getHargaById($id)
    {
        return $this->model->getHargaById($id);
    }

    public function updateHarga($id, $berat, $harga)
    {
        return $this->model->updateHarga($id, $berat, $harga);
    }

    public function deleteHarga($id)
    {
        return $this->model->deleteHarga($id);
    }
}
