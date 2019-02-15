<?php
session_start();
include '../../config/koneksi.php';

$id 	= $_POST['id'];
$sml 	= "SELECT * FROM user WHERE id = '$id'";
$sll 	= mysqli_query($konek, $sml);
$smm 	= mysqli_fetch_row($sll);
$nama	= $smm[1];
$almt 	= $smm[2];
$hp 	= $smm[3];
$email 	= $smm[4];
$pass 	= $smm[5];
$ava 	= $smm[6];
$stat 	= $_POST['status'];
$tgl 	= date('Y-m-d');

$sql	= "UPDATE user SET nama = '$nama', alamat = '$almt', hp = '$hp', email = '$email', password = '$pass', foto = '$ava', status = '$stat', tanggal = '$tgl' WHERE id = '$id'";

mysqli_query($konek, $sql);
header('location: index.php');