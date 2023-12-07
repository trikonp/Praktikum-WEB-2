<?php

include_once '../../models/Mahasiswa.php';

class MahasiswaController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new mahasiswa($db);
    }

    public function getAllMahasiswa()
    {
        return $this->model->getAllMahasiswa();
    }

    public function createMahasiswa($nama, $nim, $tempat, $tanggal, $agama, $alamat)
    {
        return $this->model->createMahasiswa($nama, $nim, $tempat, $tanggal, $agama, $alamat);
    }

    public function getMahasiswaById($id){
        return $this->model->getMahasiswaById($id);
    }

    public function updateMahasiswa($id, $nama, $nim, $tempat, $tanggal, $agama, $alamat){
        return $this->model->updateMahasiswa($id, $nama, $nim, $tempat, $tanggal, $agama, $alamat);
    }

    public function deleteMahasiswa($id){
        return $this->model->deleteMahasiswa($id);
    }
}
