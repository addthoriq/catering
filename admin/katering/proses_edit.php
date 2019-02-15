<?php
session_start();
include '../../config/koneksi.php';

$id 	= $_POST['id'];
$nama	= isset($_POST['nama'])?$_POST['nama']:'';
$harga	= $_POST['harga'];
$stat	= $_POST['status'];
$auth	= $_SESSION['idadm'];
$tgl 	= date('Y-m-d');

//Percabangan untuk nama menu
$skl	= "SELECT * FROM menuacr WHERE id = '$id'";
$mkl 	= mysqli_query($konek, $skl);
$mll	= mysqli_fetch_row($mkl);
$nam 	= $mll[1];
$hapus 	= $mll[6];
$nama_gambar	= $_FILES['gambar']['name'];
$tmp_name		= $_FILES['gambar']['tmp_name'];

if (empty($nama_gambar)) {
	$nama_gambar	= $hapus;
	$gambar			= $nama_gambar;
} else {
	//move and rename
	$acak			= rand(1111111, 9999999).".jpg";
	$gambar			= str_replace($nama_gambar, $acak, $nama_gambar);
	move_uploaded_file($tmp_name, "../img/".$gambar);
}

if (empty($nama)) {
	$nama = $nam;
}else{
	$nama = $_POST['nama'];
};

$sql	= "UPDATE menuacr SET nama = '$nama', harga = '$harga', status = '$stat', admin_id = '$auth', tanggal = '$tgl', foto = '$gambar' WHERE id = '$id'";

mysqli_query($konek, $sql);
header('location: index.php');