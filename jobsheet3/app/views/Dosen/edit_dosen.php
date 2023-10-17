<?php
include '../../classes/database.php';
$db = new database();
?>


<h3>Edit data Dosen</h3>
<form action="proses_dosen.php?aksi=update" method="post">
    <?php
    foreach ($db->edit_dosen($_GET['id']) as $d) {
    ?>
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    <input type="text" name="nama" value="<?php echo $d['nama'] ?>">
                </td>

            </tr>
            <tr>
                <td>NIP</td>
                <td><input type="number" name="nip" value="<?php echo $d['nip'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat'] ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    <?php
    }
    ?>
</form>