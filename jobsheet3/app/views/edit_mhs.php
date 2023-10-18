<?php
include '../classes/database.php';
$db = new database();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-3 border-bottom">
        <div class="container-fluid px-3">
            <a class="navbar-brand">SIAKAD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="tampil_mhs.php">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="tampil_dosen.php">Dosen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="border" style="max-width: 400px; margin: 20px auto; padding: 20px;">
        <h3 class="text-center mb-5">Edit Data Mahasiswa</h3>
        <form action="proses_mhs.php?aksi=update" method="post">
            <?php
            foreach ($db->edit_mahasiswa($_GET['id']) as $d) {
            ?>
                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>" class="form-control">
                    <input type="text" name="nim" value="<?php echo $d['nim'] ?>" class="form-control">

                </div>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="nama" value="<?php echo $d['nama'] ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" cols="30" rows="5" class="form-control"><?php echo $d['alamat'] ?></textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="tampil_mhs.php" class="btn btn-secondary w-100 mx-2">Kembali</a>
                    <button type="submit" class="btn btn-primary w-100 mx-2">Submit</button>
                </div>
            <?php
            }
            ?>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>