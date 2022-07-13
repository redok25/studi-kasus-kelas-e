<?php

include('config.php');
include('hak-akses.php');
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM `kontak` WHERE id = '$id'");
$data = $data->fetch_assoc();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Buku Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php include('navbar.php') ?>

    <div class='container row mx-auto mt-4'>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 style='float: left'>Edit Kontak</h3>
                </div>
                <div class="card-body">

                    <form action="proses/edit-kontak.php" method="POST">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <div class="mb-3">
                            <label for="inputNama" class="form-label">Nama</label>
                            <input value="<?= $data['nama'] ?>" name="nama" placeholder='Input disini...' type="text" class="form-control" id="inputNama">
                        </div>

                        <div class="mb-3">
                            <label for="inputNoHP" class="form-label">No Handphone</label>
                            <input value="<?= $data['no_hp'] ?>" name="no_hp" placeholder='Input disini...' type="number" class="form-control" id="inputNoHP">
                        </div>

                        <div class="mb-3">
                            <label for="inputAlamat" class="form-label">Alamat</label>
                            <textarea placeholder='Input disini...' name="alamat" id="inputAlamat" class="form-control"><?= $data['alamat'] ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>