<?php
include '../classes/database.php';
$db = new database();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="border" style="max-width: 400px; margin: 50px auto 0 auto; padding: 20px;">
        <h3 class="text-center">Edit data Dosen</h3>
        <form action="proses_dosen.php?aksi=update" method="post">
            <?php
            foreach ($db->edit_dosen($_GET['id']) as $d) {
            ?>
                <div class="mb-3">
                    <label class="form-label">NIP</label>
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>" class="form-control">
                    <input type="number" name="nip" value="<?php echo $d['nip'] ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" value="<?php echo $d['nama'] ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" cols="30" rows="5" class="form-control"><?php echo $d['alamat'] ?></textarea>
                </div>
                <a href="tampil_dosen.php" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            <?php
            }
            ?>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>