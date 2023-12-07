<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenCtrl = new DosenController($db);
    $result = $dosenCtrl->deleteDosen($id);

    if ($result) {
        header("location:dosen");
    } else {
        echo "Gagal Menghapus";
    }
}
