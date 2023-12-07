<?php

class Dosen
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllDosen()
    {
        $query = "SELECT * FROM dosen";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createDosen($nama, $nip, $alamat)
    {
        $query = "INSERT INTO dosen (nama, nip, alamat) VALUES ('$nama', '$nip' , '$alamat')";
        $result = mysqli_query($this->koneksi, $query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getDosenById($id)
    {
        $query = "SELECT * FROM dosen where id = $id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateDosen($id, $nama, $nip, $alamat)
    {
        $query = "UPDATE dosen set nama = '$nama', nip = '$nip', alamat = '$alamat' where id ='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteDosen($id){
        $query = "DELETE FROM dosen where id = $id ";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
