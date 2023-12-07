<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $alamat = $_POST['alamat'];

    $dosenCtrl = new DosenController($db);
    $result = $dosenCtrl->createDosen($nama, $nip, $alamat);

    if ($result) {
        header("location:dosen");
    } else {
        header("location:form_tambah_dosen");
    }
}
