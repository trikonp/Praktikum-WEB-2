<?php
//memanggil class
include '../classes/database.php';
$db = new database;
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
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


    <div class="px-4">
        <h3 class="mt-3">Data Mahasiswa</h3>
        <a href="input_mhs.php" class="btn btn-primary mt-3">Tambah Mahasiswa</a>
        <table class="table table-bordered table-striped mt-3">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>

            <?php
            if (isset($_GET['status']) && $_GET['status'] === 'success') {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil ditambahkan!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            } elseif (isset($_GET['status']) && $_GET['status'] === 'berhasil') {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Data berhasil diedit!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            } elseif (isset($_GET['status']) && $_GET['status'] === 'hapus') {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data berhasil dihapus!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }

            $no = 1;
            foreach ($db->tampil_mahasiswa() as $x) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x['nim'] ?></td>
                    <td><?php echo $x['nama'] ?></td>
                    <td><?php echo $x['alamat'] ?></td>
                    <td>
                        <a href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit" class="btn btn-warning">Edit</a>
                        <a href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>