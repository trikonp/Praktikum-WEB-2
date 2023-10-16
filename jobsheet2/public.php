<?php 
class mahasiswa{
    public $nama;
    private $nim = "220202095";

    public function tampilkan_nama(){
        return "Nama Saya Triko Nanda Pangestu <br>";
    }

    function tampilkan_nim(){
        return "NIM saya " .$this->nim;
    }

}

$mahasiswa = new mahasiswa;
echo $mahasiswa -> tampilkan_nama();
echo $mahasiswa -> tampilkan_nim();

?>