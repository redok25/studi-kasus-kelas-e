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
                        <tr>
                            <td>1</td>
                            <td>Budi</td>
                            <td>081234567890</td>
                            <td>Yogyakarta</td>
                            <td>
                                <a href='edit-kontak.php' class="btn btn-success">Edit</a>
                                <a href='hapus-konta.php' class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Budi</td>
                            <td>081234567890</td>
                            <td>Yogyakarta</td>
                            <td>
                                <a href='edit-kontak.php' class="btn btn-success">Edit</a>
                                <a href='hapus-konta.php' class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Budi</td>
                            <td>081234567890</td>
                            <td>Yogyakarta</td>
                            <td>
                                <a href='edit-kontak.php' class="btn btn-success">Edit</a>
                                <a href='hapus-konta.php' class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Budi</td>
                            <td>081234567890</td>
                            <td>Yogyakarta</td>
                            <td>
                                <a href='edit-kontak.php' class="btn btn-success">Edit</a>
                                <a href='hapus-konta.php' class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>