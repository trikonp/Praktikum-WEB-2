<?php 
class Mahasiswa {
    var $nim;
    var $nama;
    var $alamat;

    function tampil_nama(){
        return "Nama Mahasiswa : Triko Nanda Pangestu <br>";
    }

    function tampil_nim(){
        return "NIM : 220202095 <br>";
    }

    function tampil_alamat(){
        return "Alamat : Jl.Nusa Indah <br><br>";
    }

}

class Dosen {
    var $nidn;
    var $nama;
    var $prodi;

    function tampil_nama_dosen(){
        return "Nama Dosen : Fajar Ganzzz <br>";
    }

    function tampil_nidn(){
        return "NIDN : 12345678 <br>";
    }

    function tampil_prodi(){
        return "Alamat : Jl.Apa Hayoo";
    }

}

$nama_mahasiswa = new Mahasiswa();
echo $nama_mahasiswa -> tampil_nama();
echo $nama_mahasiswa -> tampil_nim();
echo $nama_mahasiswa -> tampil_alamat();

$nama_dosen = new Dosen();
echo $nama_dosen -> tampil_nama_dosen();
echo $nama_dosen -> tampil_nidn();
echo $nama_dosen -> tampil_prodi();

?>