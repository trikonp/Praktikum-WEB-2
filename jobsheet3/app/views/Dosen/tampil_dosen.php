<?php
include '../../classes/database.php';
$db = new database;
?>

<h3>Data Dosen</h3>
<a href="input_dosen.php" class="btn btn-primary">Tambah Dosen</a>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIP</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>

    <?php
    $no = 1;
    foreach ($db->tampil_dosen() as $x) {
    ?>
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $x['nama']?></td>
        <td><?php echo $x['nip']?></td>
        <td><?php echo $x['alamat']?></td>
        <td>
            <a href="edit_dosen.php?id=<?php echo $x['id']; ?>&aksi=edit" class="btn btn-warning">Edit</a>
            <a href="proses_dosen.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>