<?php 
require '../../index.php';
?>

<div class="border" style="max-width: 400px; margin: 20px auto; padding: 20px;">
    <h3 class="text-center mb-5">Tambah Data Mahasiswa</h3>
    <form action="tambah_mahasiswa_sukses" method="post">
        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="number" name="nim" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Agama</label>
            <select name="agama" class="form-control">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Khonghucu">Khonghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="d-flex justify-content-between">
            <a href="mahasiswa" class="btn btn-secondary w-100 mx-2">Kembali</a>
            <button type="submit" class="btn btn-primary w-100 mx-2" name="submit">Submit</button>
        </div>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>