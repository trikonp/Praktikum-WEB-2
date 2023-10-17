<?php
class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }


    //method mahasiswa
    function tampil_mahasiswa()
    {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa");
        $hasil = array();
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_mahasiswa($nama,$nim, $alamat){
        mysqli_query($this->koneksi, "insert into mahasiswa (nama, nim, alamat) value('$nama','$nim','$alamat')");
    }

    function edit_mahasiswa($id){
        $data = mysqli_query($this->koneksi, "select * from mahasiswa where id = '$id'");
        $hasil = array();
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id, $nama, $nim, $alamat){
        mysqli_query($this->koneksi, "update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat' where id='$id'");
    }

    function hapus($id){
        mysqli_query($this->koneksi, "delete from mahasiswa where id='$id'");
    }



    //method dosen
    function tampil_dosen(){
        $data = mysqli_query($this->koneksi, "select * from dosen");
        $hasil = array();
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_dosen($nip, $nama, $alamat){
        mysqli_query($this->koneksi, "insert into dosen (nip, nama, alamat) value('$nip','$nama','$alamat')");
    }

    function edit_dosen($id){
        $data = mysqli_query($this->koneksi, "select * from dosen where id = '$id'");
        $hasil = array();
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update_dosen($id, $nip, $nama, $alamat){
        mysqli_query($this->koneksi, "update dosen set nip='$nip', nama='$nama', alamat='$alamat' where id='$id'");
    }

    function hapus_dosen($id){
        mysqli_query($this->koneksi, "delete from dosen where id='$id'");
    }
}
?>