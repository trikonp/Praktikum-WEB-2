<?php

include_once '../../config.php';
include_once '../../controllers/PengirimanController.php';
include_once '../../controllers/HargaController.php';
require '../../index.php';

$database = new database;
$db = $database->getKoneksi();

$pengirimanCtrl = new PengirimanController($db);
$pengiriman = $pengirimanCtrl->getAllPengiriman();

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
    <h3 class="mt-3">Data Pengiriman</h3>
    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#modal">
        Tambah Pengiriman
    </button>
    <table class="table table-bordered mt-3">
        <tr>
            <th class="table-secondary" style="width:5%">NO</th>
            <th class="table-secondary">ID Pengiriman</th>
            <th class="table-secondary">Tanggal</th>
            <th class="table-secondary">Nama Pengirim</th>
            <th class="table-secondary">No.HP Pengirim</th>
            <th class="table-secondary">Nama Penerima</th>
            <th class="table-secondary">No.HP Penerima</th>
            <th class="table-secondary">Alamat</th>
            <th class="table-secondary">Nama Barang</th>
            <th class="table-secondary">Berat</th>
            <th class="table-secondary">Harga</th>
            <th class="table-secondary">Status</th>
            <th class="table-secondary">Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($pengiriman as $x) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $x['id_pengiriman'] ?></td>
                <td><?php echo $x['tanggal'] ?></td>
                <td><?php echo $x['pengirim'] ?></td>
                <td><?php echo $x['no_hp'] ?></td>
                <td><?php echo $x['penerima'] ?></td>
                <td><?php echo $x['nohp_penerima'] ?></td>
                <td><?php echo $x['alamat'] ?></td>
                <td><?php echo $x['barang'] ?></td>
                <td><?php echo $x['berat'] ?></td>
                <td><?php echo $x['harga'] ?></td>
                <td><?php echo $x['status'] ?></td>
                <td>
                    <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_edit_peng<?php echo $x['id']; ?>">Edit</a>
                    <a href="hapus_pengiriman?id=<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin ingin menghapus....?')" class="btn btn-danger">Hapus</a>
                </td>
            </tr>

            <!-- Modal Edit Pengiriman -->
            <div class="modal fade modal-lg" id="modal_edit_peng<?php echo $x['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="form_edit_pengiriman?id=<?php echo $x['id']; ?>" method="post">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Edit Pengiriman</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">ID Pengiriman</label>
                                    <input type="text" name="id_pengiriman" value="<?php echo $x['id_pengiriman'] ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tanggal</label>
                                    <input type="date" name="tanggal" value="<?php echo $x['tanggal'] ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pengirim</label>
                                    <input type="text" name="pengirim" value="<?php echo $x['pengirim'] ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">No.HP Pengirim</label>
                                    <input type="number" name="no_hp" value="<?php echo $x['no_hp'] ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Penerima</label>
                                    <input type="text" name="penerima" value="<?php echo $x['penerima'] ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">No.HP Penerima</label>
                                    <input type="number" name="nohp_penerima" value="<?php echo $x['nohp_penerima'] ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat Penerima</label>
                                    <input type="text" name="alamat" value="<?php echo $x['alamat'] ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Barang</label>
                                    <input type="text" name="barang" value="<?php echo $x['barang'] ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Berat</label>
                                    <select name="berat" id="beratSelect" class="form-control">
                                        <?php
                                        foreach ($harga as $b) {
                                            $selected = ($x['berat'] == $b['berat']) ? 'selected' : '';
                                        ?>
                                            <option value="<?php echo $b['berat'] ?>" data-harga="<?php echo $b['harga'] ?>"><?php echo $b['berat'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Harga</label>
                                    <input type="text" name="harga" value="<?php echo $x['harga'] ?>" id="hargaInput" class="form-control" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="Diproses" <?php if ($x['status'] === 'Diproses') echo 'selected'; ?>>Diproses</option>
                                        <option value="Dikirim" <?php if ($x['status'] === 'Dikirim') echo 'selected'; ?>>Dikirim</option>
                                        <option value="Diterima" <?php if ($x['status'] === 'Diterima') echo 'selected'; ?>>Diterima</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-secondary" href="pengiriman">Tutup</a>
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

    <!-- modal tambah -->
    <div class="modal fade modal-lg" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="tambah_pengiriman_sukses" method="post">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Tambah Pengiriman</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">ID Pengiriman</label>
                            <input type="text" class="form-control" name="id_pengiriman">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Pengirim</label>
                            <input name="pengirim" class="form-control" type="text"></input>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No HP Pengirim</label>
                            <input type="number" class="form-control" name="no_hp">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Penerima</label>
                            <input type="text" class="form-control" name="penerima">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No HP Penerima</label>
                            <input type="number" class="form-control" name="nohp_penerima">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat Penerima</label>
                            <textarea name="alamat" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" name="barang">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Berat</label>
                            <select name="berat" id="beratSelet" class="form-control">
                                <option value="">Pilih Berat</option>
                                <?php
                                foreach ($harga as $b) {
                                ?>
                                    <option value="<?php echo $b['berat'] ?>" data-har="<?php echo $b['harga'] ?>"><?php echo $b['berat'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" id="hargaIn" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="Diproses">Diproses</option>
                                <option value="Dikirim">Dikirim</option>
                                <option value="Diterima">Diterima</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-secondary" href="pengiriman">Tutup</a>
                        <button class="btn btn-primary" name="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    document.getElementById('beratSelet').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var harga = selectedOption.getAttribute('data-har');

        document.getElementById('hargaIn').value = harga;
    });

    document.getElementById('beratSelect').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var selectedIndex = this.selectedIndex;
        var options = this.options;
        var harga = options[selectedIndex].getAttribute('data-harga');

        document.getElementById('hargaInput').value = harga;
    });
</script>
</body>