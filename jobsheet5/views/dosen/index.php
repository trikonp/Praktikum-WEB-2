<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

$database = new database;
$db = $database->getKoneksi();

$dosenCtrl = new DosenController($db);
$dosen = $dosenCtrl->getAllDosen();

?>


<div class="px-4">
    <h3 class="mt-3">Data Dosen</h3>
    <a href="form_tambah_dosen" class="btn btn-primary mt-3">Tambah Dosen</a>
    <table class="table table-bordered table-striped mt-3">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($dosen as $x) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $x['nip'] ?></td>
                <td><?php echo $x['nama'] ?></td>
                <td><?php echo $x['alamat'] ?></td>
                <td>
                    <a href="form_edit_dosen?id=<?php echo $x['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="hapus_dosen?id=<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin ingin menghapus.....?')" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>