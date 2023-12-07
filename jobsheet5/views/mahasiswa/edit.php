<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaCtrl = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaCtrl->getMahasiswaById($id);

    if ($mahasiswaData) {
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $tempat = $_POST['tempat'];
            $tanggal = $_POST['tanggal'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];


            $result = $mahasiswaCtrl->updateMahasiswa($id, $nama, $nim, $tempat, $tanggal, $agama, $alamat);

            if ($result) {
                header("location:mahasiswa");
            } else {
                header("location:form_edit_mahasiswa");
            }
        }
    } else {
        echo "Mahasiswa tidak ditemukan";
    }
}
?>

<div class="border" style="max-width: 400px; margin: 20px auto; padding: 20px;">
    <h3 class="text-center mb-5">Edit Data Mahasiswa</h3>
    <form action="" method="post">
        <?php
        if ($mahasiswaData) {
        ?>
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="number" name="nim" value="<?php echo $mahasiswaData['nim'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" value="<?php echo $mahasiswaData['nama'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat" value="<?php echo $mahasiswaData['tempat'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal" value="<?php echo $mahasiswaData['tanggal'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Agama</label>
                <select name="agama" class="form-control">
                    <option value="Islam" <?php if ($mahasiswaData['agama'] === 'Islam') echo 'selected'; ?>>Islam</option>
                    <option value="Kristen" <?php if ($mahasiswaData['agama'] === 'Kristen') echo 'selected'; ?>>Kristen</option>
                    <option value="Katholik" <?php if ($mahasiswaData['agama'] === 'Katholik') echo 'selected'; ?>>Katholik</option>
                    <option value="Hindu" <?php if ($mahasiswaData['agama'] === 'Hindu') echo 'selected'; ?>>Hindu</option>
                    <option value="Budha" <?php if ($mahasiswaData['agama'] === 'Budha') echo 'selected'; ?>>Budha</option>
                    <option value="Konghuchu" <?php if ($mahasiswaData['agama'] === 'Konghuchu') echo 'selected'; ?>>Konghuchu</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" cols="30" rows="5" class="form-control"><?php echo $mahasiswaData['alamat'] ?></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <a href="mahasiswa" class="btn btn-secondary w-100 mx-2">Kembali</a>
                <button type="submit" class="btn btn-primary w-100 mx-2" name="submit">Submit</button>
            </div>
        <?php
        }
        ?>
    </form>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>