<?php
session_start();
include '../../config/koneksi.php';

$id 	= $_POST['id'];
$nama	= $_POST['nama'];
$email	= $_POST['email'];
$pass	= $_POST['pass'];
$stt 	= $_POST['status'];
$tgl 	= date('Y-m-d');

$skl 			= "SELECT * FROM admin WHERE id = '$id'";
$qrr 			= mysqli_query($konek, $skl);
$wow 			= mysqli_fetch_row($qrr);
$hapus			= $wow[4];
$sandi			= $wow[3];
$role			= $wow[7];
$del			= "http://localhost/ilma/admin/avatar/".$hapus;

// Upload Avatar
$nama_gambar	= $_FILES['gambar']['name'];
$tmp_name		= $_FILES['gambar']['tmp_name'];

if (empty($nama_gambar)) {
	$nama_gambar	= $hapus;
	$gambar			= $nama_gambar;
} else {
	//move and rename
	$acak			= rand(1111111, 9999999).".jpg";
	$gambar			= str_replace($nama_gambar, $acak, $nama_gambar);
	move_uploaded_file($tmp_name, "../../admin/avatar/".$gambar);
}

//Percabangan jika mengubah sandi atau tidak
if (empty($pass)) {
	$pass 		= $sandi;
} else {
	$pass		= $_POST['pass'];
}


$sql	= "UPDATE admin SET nama = '$nama', email = '$email', password = '$pass', poto = '$gambar', status = '$stt', tanggal = '$tgl', role_id = '$role' WHERE id = '$id'";
mysqli_query($konek, $sql);
header('location: index.php?id='.$id);