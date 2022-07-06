<?php
include('../config.php');

$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO `kontak`(`nama`, `no_hp`, `alamat`) VALUES ('$nama','$no_hp','$alamat')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
