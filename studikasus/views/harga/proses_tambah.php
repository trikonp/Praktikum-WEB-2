<?php

include_once '../../config.php';
include_once '../../controllers/HargaController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $berat = $_POST['berat'];
    $harga = $_POST['harga'];

    $hargaCtrl = new HargaController($db);
    $result = $hargaCtrl->createHarga($berat, $harga);

    if ($result) {
        header("location:harga");
    } else {
        header("location:form_tambah_harga");
    }
}
