<?php
session_start();
include '../../config/koneksi.php';

$nama	= $_POST['nama'];
$harga	= $_POST['harga'];
$stat 	= $_POST['status'];
$auth 	= $_SESSION['idadm'];
$tgl 	= date('Y-m-d');

$sql	= "INSERT INTO menulangg (nama, harga, status, admin_id, tanggal) VALUES ('$nama', '$harga', '$stat', '$auth', '$tgl')";

mysqli_query($konek, $sql);
header('location: index.php');