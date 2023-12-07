<?php

include_once '../../config.php';
include_once '../../controllers/PengirimanController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pengirimanCtrl = new PengirimanController($db);
    $result = $pengirimanCtrl->deletePengiriman($id);

    if ($result) {
        header("location:pengiriman");
    } else {
        echo "Gagal Menghapus";
    }
}
