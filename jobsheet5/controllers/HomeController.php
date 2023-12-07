<?php 

class HomeController{
    public function home(){
        header("location:http://localhost/jobsheet5/index.php");
    }
    public function mahasiswa(){
        header("location:http://localhost/jobsheet5/views/mahasiswa/index.php");
    }
    public function form_tambah_mahasiswa(){
        header("location:http://localhost/jobsheet5/views/mahasiswa/tambah.php");
    }
    public function tambah_mahasiswa_sukses(){
        header("location:http://localhost/jobsheet5/views/mahasiswa/proses_tambah.php");
    }
    public function form_edit_mahasiswa(){
        header("location:http://localhost/jobsheet5/views/mahasiswa/edit.php");
    }
    public function hapus_mahasiswa(){
        header("location:http://localhost/jobsheet5/views/mahasiswa/hapus.php");
    }
    public function dosen(){
        header("location:http://localhost/jobsheet5/views/dosen/index.php");
    }
    public function form_tambah_dosen(){
        header("location:http://localhost/jobsheet5/views/dosen/tambah.php");
    }
    public function tambah_dosen_sukses(){
        header("location:http://localhost/jobsheet5/views/dosen/proses_tambah.php");
    }
    public function form_edit_dosen(){
        header("location:http://localhost/jobsheet5/views/dosen/edit.php");
    }
    public function hapus_dosen(){
        header("location:http://localhost/jobsheet5/views/dosen/hapus.php");
    }
}

?>