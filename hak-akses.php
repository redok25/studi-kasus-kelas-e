<?php 

if (empty($_SESSION['user'])) {
	$_SESSION['gagal'] = "Akses ditolak silahkan login terlebih dahulu!";
	header("Location: login.php");
	die();
}