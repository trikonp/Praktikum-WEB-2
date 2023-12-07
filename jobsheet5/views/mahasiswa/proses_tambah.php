<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $mahasiswaCtrl = new MahasiswaController($db);
    $result = $mahasiswaCtrl->createMahasiswa($nama, $nim, $tempat, $tanggal, $agama, $alamat);

    if ($result) {
        header("location:mahasiswa");
    } else {
        header("location:form_tambah_mahasiswa");
    }
}
