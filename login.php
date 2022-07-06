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
        <div class="col-5 mx-auto mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class='text-center'>Form Login</h3>
                </div>
                <div class="card-body">

                    <form action="proses/login.php" method="POST">
                        <div class="mb-3">
                            <label for="inputUsername" class="form-label">Username</label>
                            <input name="username" placeholder='Input disini...' type="text" class="form-control" id="inputUsername">
                        </div>

                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input name="password" placeholder='Input disini...' type="password" class="form-control" id="inputPassword">
                        </div>
                        <hr>

                        <a href="register.php" style='display:block; text-decoration:none' class='mb-2'>Belum punya akun? Daftar disini!</a>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>