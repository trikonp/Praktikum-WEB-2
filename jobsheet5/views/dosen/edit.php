<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenCtrl = new DosenController($db);
    $dosenData = $dosenCtrl->getDosenById($id);

    if ($dosenData) {
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $nip = $_POST['nip'];
            $alamat = $_POST['alamat'];


            $result = $dosenCtrl->updateDosen($id, $nama, $nip, $alamat);

            if ($result) {
                header("location:dosen");
            } else {
                header("location:form_edit_dosen");
            }
        }
    } else {
        echo "Dosen tidak ditemukan";
    }
}
?>

<div class="border" style="max-width: 400px; margin: 20px auto; padding: 20px;">
    <h3 class="text-center mb-5">Edit Data Dosen</h3>
    <form action="" method="post">
        <?php
        if ($dosenData) {
        ?>
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="number" name="nip" value="<?php echo $dosenData['nip'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" value="<?php echo $dosenData['nama'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" cols="30" rows="5" class="form-control"><?php echo $dosenData['alamat'] ?></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <a href="dosen" class="btn btn-secondary w-100 mx-2">Kembali</a>
                <button type="submit" class="btn btn-primary w-100 mx-2" name="submit">Submit</button>
            </div>
        <?php
        }
        ?>
    </form>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>