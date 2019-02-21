<?php
session_start();
include '../../config/koneksi.php';

$id 		= $_POST['id'];
$nama		= $_POST['nama'];
$email	= $_POST['email'];
$pass		= md5($_POST['pass']);
$hp 		= $_POST['hp'];
$alamat = $_POST['alamat'];
$jkl 		= $_SESSION['jklusr'];
$stt 		= 1;
$role		= $_SESSION['roleusr'];

$skl 			= "SELECT * FROM user WHERE id = '$id'";
$qrr 			= mysqli_query($konek, $skl);
$wow 			= mysqli_fetch_row($qrr);
$hapus		= $wow[7];
$sandi		= $wow[6];
$tgl 			= $wow[9];
$del			= "http://localhost/ilma/member/avatar/".$hapus;

// Upload Avatar
$nama_gambar	= $_FILES['gambar']['name'];
$tmp_name			= $_FILES['gambar']['tmp_name'];

if (empty($nama_gambar)) {
	$nama_gambar	= $hapus;
	$gambar				= $nama_gambar;
} else {
	//move and rename
	$acak				= rand(1111111, 9999999).".jpg";
	$gambar			= str_replace($nama_gambar, $acak, $nama_gambar);
	move_uploaded_file($tmp_name, "../avatar/".$gambar);
}

//Percabangan jika mengubah sandi atau tidak
if (empty($pass)) {
	$pass 		= $sandi;
} else {
	$pass		= md5($_POST['pass']);
}


$sql	= "UPDATE user SET nama = '$nama', alamat = '$alamat', hp = '$hp', email = '$email', jkl = '$jkl', password = '$pass', foto = '$gambar', status = $stt, tanggal = '$tgl', role_id = '$role' WHERE id = '$id'";
mysqli_query($konek, $sql);
exit();
// header('location: index.php?id='.$id);
