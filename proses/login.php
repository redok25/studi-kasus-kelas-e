<?php
include('../config.php');

var_dump($_POST);

// inisialisasi variable
$username = $_POST['username'];
$password = $_POST['password'];

// ambil data user
$user = $conn->query("SELECT * FROM `user` WHERE username = '$username'");
if ($user->num_rows != 1) {
    header("Location: ../login.php");
    die();
}

// cek passwordnya
$user = $user->fetch_assoc();

if ($password != $user['password']) {
    header("Location: ../login.php");
    die();
} else {
    header("Location: ../index.php");
    die();
}
