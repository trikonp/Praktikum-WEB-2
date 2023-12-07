<?php

include_once '../../config.php';
include_once '../../controllers/PengirimanController.php';
include_once '../../controllers/HargaController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

$hargaCtrl = new HargaController($db);
$harga = $hargaCtrl->getAllHarga();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pengirimanCtrl = new PengirimanController($db);
    $pengirimanData = $pengirimanCtrl->getPengirimanById($id);

    if ($pengirimanData) {
        if (isset($_POST['submit'])) {
            $id_pengiriman = $_POST['id_pengiriman'];
            $tanggal = $_POST['tanggal'];
            $pengirim = $_POST['pengirim'];
            $no_hp = $_POST['no_hp'];
            $penerima = $_POST['penerima'];
            $nohp_penerima = $_POST['nohp_penerima'];
            $alamat = $_POST['alamat'];
            $barang = $_POST['barang'];
            $berat = $_POST['berat'];
            $harga = $_POST['harga'];
            $status = $_POST['status'];

            $result = $pengirimanCtrl->updatePengiriman($id, $id_pengiriman, $tanggal, $pengirim, $no_hp, $penerima, $nohp_penerima, $alamat, $barang, $berat, $harga, $status);

            if ($result) {
                header("location:pengiriman");
            } else {
                header("location:form_edit_pengiriman");
            }
        }
    } else {
        echo "Pengiriman tidak ditemukan";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    // Tambahkan event listener ke elemen beratSelect
    document.getElementById('beratSelect').addEventListener('change', function() {
        // Dapatkan opsi yang dipilih
        var selectedOption = this.options[this.selectedIndex];

        // Dapatkan indeks opsi yang dipilih
        var selectedIndex = this.selectedIndex;

        // Dapatkan semua elemen opsi
        var options = this.options;

        // Dapatkan nilai harga yang sesuai dengan indeks opsi yang dipilih
        var harga = options[selectedIndex].getAttribute('data-harga');

        // Perbarui nilai input hargaInput dengan harga yang sesuai
        document.getElementById('hargaInput').value = harga;
    });
</script>

</body>