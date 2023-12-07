<?php
include_once '../../config.php';
include_once '../../controllers/HargaController.php';
require '../../index.php';

$database = new database;
$db = $database->getKoneksi();

$hargaCtrl = new HargaController($db);
$harga = $hargaCtrl->getAllHarga();
?>

<style>
    th,
    td {
        text-align: center;
    }
</style>


<div class="px-4" style="margin-top:70px ">
    <h3 class="mt-3">Data Harga</h3>
    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#modal_tambah">
        Tambah Harga
    </button>
    <table class="table table-bordered mt-4">
        <tr>
            <th class="table-secondary" style="width:5%">No</th>
            <th class="table-secondary">Berat</th>
            <th class="table-secondary">Harga</th>
            <th class="table-secondary">Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($harga as $x) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $x['berat'] ?></td>
                <td><?php echo $x['harga'] ?></td>
                <td>
                    <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_edit<?php echo $x['id']; ?>">Edit</a>
                    <a href="hapus_harga?id=<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin ingin menghapus....?')" class="btn btn-danger">Hapus</a>
                </td>
            </tr>

            <!-- Modal Edit Harga -->
            <div class="modal fade modal-lg" id="modal_edit<?php echo $x['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="form_edit_harga?id=<?php echo $x['id']; ?>" method="post">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Edit Harga</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Berat</label>
                                    <input type="text" name="berat" value="<?php echo $x['berat']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Harga</label>
                                    <input type="text" name="harga" value="<?php echo $x['harga']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-secondary" href="harga">Tutup</a>
                                <button class="btn btn-primary" name="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </table>

    <!-- Modal Tambah Harga -->
    <div class="modal fade modal-lg" id="modal_tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="tambah_harga_sukses" method="post">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Tambah Harga</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Berat</label>
                            <input type="text" name="berat" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-secondary" href="harga">Tutup</a>
                        <button class="btn btn-primary" name="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>