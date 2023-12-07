<?php 

class HomeController{
    public function home(){
        header("location:http://localhost/studikasus/index.php");
    }
    public function harga(){
        header("location:http://localhost/studikasus/views/harga/index.php");
    }
    public function form_tambah_harga(){
        header("location:http://localhost/studikasus/views/harga/tambah.php");
    }
    public function tambah_harga_sukses(){
        header("location:http://localhost/studikasus/views/harga/proses_tambah.php");
    }
    public function form_edit_harga(){
        header("location:http://localhost/studikasus/views/harga/edit.php");
    }
    public function hapus_harga(){
        header("location:http://localhost/studikasus/views/harga/hapus.php");
    }
    public function pengiriman(){
        header("location:http://localhost/studikasus/views/pengiriman/index.php");
    }
    public function form_tambah_pengiriman(){
        header("location:http://localhost/studikasus/views/pengiriman/tambah.php");
    }
    public function tambah_pengiriman_sukses(){
        header("location:http://localhost/studikasus/views/pengiriman/proses_tambah.php");
    }
    public function form_edit_pengiriman(){
        header("location:http://localhost/studikasus/views/pengiriman/edit.php");
    }
    public function hapus_pengiriman(){
        header("location:http://localhost/studikasus/views/pengiriman/hapus.php");
    }
}

?>