<?php
include '../../config/koneksi.php';

$id 	= $_POST['id'];
$nama	= $_POST['nama'];
$email	= $_POST['email'];
$pass	= $_POST['pass'];

$skl 			= "SELECT * FROM op WHERE id = '$id'";
$qrr 			= mysqli_query($konek, $skl);
$wow 			= mysqli_fetch_row($qrr);
$hapus			= $wow[4];
$sandi			= $wow[3];
$role 			= $wow[5];
$del			= "http://localhost/ilma/operator/avatar/".$hapus;

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
	move_uploaded_file($tmp_name, "../avatar/".$gambar);
}

//Percabangan jika mengubah sandi atau tidak
if (empty($pass)) {
	$pass 		= $sandi;
} else {
	$pass		= $_POST['pass'];
}


$sql	= "UPDATE op SET nama = '$nama', email = '$email', password = '$pass', foto = '$gambar', role_id = '$role' WHERE id = '$id'";
mysqli_query($konek, $sql);
exit();
// header('location: index.php?id='.$id);