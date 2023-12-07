<?php 

include_once '../../config.php';
include_once '../../controllers/PengirimanController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])){
    $id_pengiriman = $_POST['id_pengiriman'];
    $tanggal = $_POST['tanggal'];
    $pengirim = $_POST['pengirim'];
    $no_hp = $_POST['no_hp'];
    $penerima = $_POST['penerima'];
    $nohp_penerima = $_POST['nohp_penerima'];
    $alamat = $_POST['alamat'];
    $barang = $_POST['barang'];
    $berat = $_POST['berat'];
    $harga= $_POST['harga'];
    $status= $_POST['status'];

    $pengirimanCtrl = new PengirimanController($db);
    $result = $pengirimanCtrl->createPengiriman($id_pengiriman, $tanggal, $pengirim, $no_hp, $penerima, $nohp_penerima, $alamat, $barang, $berat, $harga, $status);

    if ($result){
        header("location:pengiriman");
    }else{
        header("location:form_tambah_pengiriman");
    }
}

?>