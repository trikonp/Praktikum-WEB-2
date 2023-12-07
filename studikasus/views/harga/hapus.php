<?php

include_once '../../config.php';
include_once '../../controllers/HargaController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $hargaCtrl = new HargaController($db);
    $result = $hargaCtrl->deleteHarga($id);

    if ($result) {
        header("location:harga");
    } else {
        echo "Gagal Menghapus";
    }
}
