<?php 
class Mahasiswa {
    var $nama;

    function __construct(){
        echo "Saya Mahasiswa Teknik Informatika <br>";
    }

    function tampil_nama(){
        return "Nama Saya Triko Nanda Pangestu <br>";
    }

    function tampil_mahasiswa(){
        return "Tidak akan menjadi joki atau tidak akan menggunakan jasa joki sampai lulus kuliah <br>";
    }

    function __destruct(){
        echo "Politeknik Negeri Cilacap <br>";
    }

}

$nama_mahasiswa = new Mahasiswa();
echo $nama_mahasiswa -> tampil_nama();
echo $nama_mahasiswa -> tampil_mahasiswa();
