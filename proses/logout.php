<?php 
include '../config.php';

unset($_SESSION['user']);

$_SESSION['notif'] = "Logout berhasil!";
header("Location: ../login.php");