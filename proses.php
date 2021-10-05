<?php
include 'app/database/database.php';

use App\Database\database;

$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
	$db->input($_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['email']);
	header("location:home.php");
} elseif ($aksi == "hapus") {
	echo $db->delete($_GET['id']);
	header("location:home.php");
} elseif ($aksi == "update") {
	$db->update($_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['email'], $_GET['id']);
	header("location:home.php");
}
