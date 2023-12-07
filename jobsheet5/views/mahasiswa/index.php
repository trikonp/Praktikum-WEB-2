<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

$database = new database;
$db = $database->getKoneksi();

$mahasiswaCtrl = new MahasiswaController($db);
$mahasiswa = $mahasiswaCtrl->getAllMahasiswa();

?>


<div class="px-4">
    <h3 class="mt-3">Data Mahasiswa</h3>
    <a href="form_tambah_mahasiswa" class="btn btn-primary mt-3">Tambah Mahasiswa</a>
    <table class="table table-bordered table-striped mt-3">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($mahasiswa as $x) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $x['nim'] ?></td>
                <td><?php echo $x['nama'] ?></td>
                <td><?php echo $x['tempat'] ?></td>
                <td><?php echo $x['tanggal'] ?></td>
                <td><?php echo $x['agama'] ?></td>
                <td><?php echo $x['alamat'] ?></td>
                <td>
                    <a href="form_edit_mahasiswa?id=<?php echo $x['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="hapus_mahasiswa?id=<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin ingin menghapus....?')" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>