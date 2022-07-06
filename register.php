<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Buku Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class='container row mx-auto mt-4'>
        <div class="col-6 mx-auto mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class='text-center'>Form Register</h3>
                </div>
                <div class="card-body">

                    <form action="proses/register.php" method="POST">
                        <div class="mb-3">
                            <label for="inputNama" class="form-label">Nama</label>
                            <input placeholder='Input disini...' type="text" class="form-control" id="inputNama" name="nama">
                        </div>

                        <div class="mb-3">
                            <label for="inputUsername" class="form-label">Username</label>
                            <input placeholder='Input disini...' type="text" class="form-control" id="inputUsername" name="username">
                        </div>

                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input placeholder='Input disini...' type="password" class="form-control" id="inputPassword" name="password">
                        </div>

                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Ulangi Password</label>
                            <input placeholder='Input disini...' type="password" class="form-control" id="inputPassword" name="ulang_password">
                        </div>
                        <hr>

                        <a href="login.php" style='display:block; text-decoration:none' class='mb-2'>Sudah punya akun? Login disini!</a>
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </form>

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>