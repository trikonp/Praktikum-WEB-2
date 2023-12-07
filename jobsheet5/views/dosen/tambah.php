<?php 
require '../../index.php';
?>

<div class="border" style="max-width: 400px; margin: 20px auto; padding: 20px;">
    <h3 class="text-center mb-5">Tambah Data Dosen</h3>
    <form action="tambah_dosen_sukses" method="post">
        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="number" name="nip" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="d-flex justify-content-between">
            <a href="dosen" class="btn btn-secondary w-100 mx-2">Kembali</a>
            <button type="submit" class="btn btn-primary w-100 mx-2" name="submit">Submit</button>
        </div>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>