<?php

class Mahasiswa
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllMahasiswa()
    {
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createMahasiswa($nama, $nim, $tempat, $tanggal, $agama, $alamat)
    {
        $query = "INSERT INTO mahasiswa (nama, nim, tempat, tanggal, agama, alamat) VALUES ('$nama', '$nim' , '$tempat' , '$tanggal' , '$agama' , '$alamat')";
        $result = mysqli_query($this->koneksi, $query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getMahasiswaById($id)
    {
        $query = "SELECT * FROM mahasiswa where id = $id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateMahasiswa($id, $nama, $nim, $tempat, $tanggal, $agama, $alamat)
    {
        $query = "UPDATE mahasiswa set nama = '$nama', nim = '$nim', tempat = '$tempat', tanggal = '$tanggal', agama = '$agama', alamat = '$alamat' where id ='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteMahasiswa($id){
        $query = "DELETE FROM mahasiswa where id = $id ";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
