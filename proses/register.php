<?php
include('../config.php');

// var_dump($_POST);

// inisialisasi variable
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$ulang_password = $_POST['ulang_password'];

// cek username
$user = $conn->query("SELECT * FROM `user` WHERE username = '$username'");

if ($user->num_rows > 0) {
    header("Location: ../register.php");
    die();
}

// cek password
if ($password != $ulang_password) {
    header("Location: ../register.php");
    die();
}

// simpan
$sql = "INSERT INTO `user`(`nama`, `username`, `password`) VALUES ('$nama','$username','$password')";


if ($conn->query($sql) === TRUE) {
    header("Location: ../login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
