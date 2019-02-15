<?php
session_start();
include '../../config/koneksi.php';

$nama	= $_POST['nama'];
$harga	= $_POST['harga'];
$stat	= $_POST['status'];
$auth	= $_SESSION['idadm'];
$tgl 	= date('Y-m-d');

// Upload Avatar
$nama_gambar	= $_FILES['gambar']['name'];
$tmp_name		= $_FILES['gambar']['tmp_name'];
$acak			= rand(1111111, 9999999).".jpg";
$gambar			= str_replace($nama_gambar, $acak, $nama_gambar);
move_uploaded_file($tmp_name, "../img/".$gambar);

$sql	= "INSERT INTO menuacr (nama, harga, status, admin_id, tanggal, foto) VALUES ('$nama', '$harga', '$stat', $auth, '$tgl', '$gambar')";

mysqli_query($konek, $sql);
header('location: index.php');