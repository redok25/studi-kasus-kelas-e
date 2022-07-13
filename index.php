<?php include('config.php'); ?>
<?php include('hak-akses.php'); ?>

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
                    <h3 style='float: left'>Data Kontak</h3>
                    <a href='tambah-kontak.php' style='float: right' class="btn btn-primary">Tambah Kontak</a>
                </div>
                <div class="card-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No Handphone</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data = $conn->query("SELECT * FROM `kontak`");
                            $no = 1;
                            ?>

                            <?php while ($d = $data->fetch_assoc()) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $d['nama'] ?></td>
                                    <td><?= $d['no_hp'] ?></td>
                                    <td><?= $d['alamat'] ?></td>
                                    <td>
                                        <a href='edit-kontak.php?id=<?= $d['id'] ?>' class="btn btn-success">Edit</a>
                                        <a href='proses/hapus-kontak.php?id=<?= $d['id'] ?>' class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php include 'notif.php'; ?>
</body>

</html>