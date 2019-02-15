<?php
session_start();
include '../../config/koneksi.php';

$nama	= $_POST['nama'];
$email	= $_POST['email'];
$pass	= $_POST['pass'];
$stat 	= 1;
$tgl 	= date('Y-m-d');
$role 	= 2;

// Upload Avatar
$nama_gambar	= $_FILES['gambar']['name'];
$tmp_name		= $_FILES['gambar']['tmp_name'];
$acak			= rand(1111111, 9999999).".jpg";
$gambar			= str_replace($nama_gambar, $acak, $nama_gambar);
move_uploaded_file($tmp_name, "../../admin/avatar/".$gambar);

$sql	= "INSERT INTO admin (nama, email, password, poto, status, tanggal, role_id) VALUES ('$nama', '$email', '$pass', '$gambar', '$stat', '$tgl', '$role')";

mysqli_query($konek, $sql);
header('location: index.php');