<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaCtrl = new MahasiswaController($db);
    $result = $mahasiswaCtrl->deleteMahasiswa($id);

    if ($result) {
        header("location:mahasiswa");
    } else {
        echo "Gagal Menghapus";
    }
}
