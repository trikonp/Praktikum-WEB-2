<?php

include_once '../../config.php';
include_once '../../controllers/HargaController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $hargaCtrl = new HargaController($db);
    $hargaData = $hargaCtrl->getHargaById($id);

    if ($hargaData) {
        if (isset($_POST['submit'])) {
            $berat = $_POST['berat'];
            $harga = $_POST['harga'];


            $result = $hargaCtrl->updateHarga($id, $berat, $harga);

            if ($result) {
                header("location:harga");
            } else {
                header("location:form_edit_harga");
            }
        }
    } else {
        echo "Harga tidak ditemukan";
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>