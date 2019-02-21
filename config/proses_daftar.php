<?php
include 'koneksi.php';

//on register.php
$namargs	  = $_POST['nama'];
$emailrgs	= $_POST['email'];
$hp     = $_POST['hp'];
$pass	  = md5($_POST['password']);
// $alamat =

//on databases
$jkl  = $_POST['jkl'];
$stt 	= 1;
$tgl 	= date('Y-m-d');
$role	= 5;

//Avatar
if ($jkl==1) {
  $gambar = "male.png";
}else {
  $gambar = "female.png";
};

$sql  = "INSERT INTO user (nama, hp, email, jkl, password, foto, status, tanggal, role_id) VALUES ('$namargs', '$hp', '$emailrgs', $jkl, '$pass', '$gambar', $stt, '$tgl', $role)";

mysqli_query($konek, $sql);
exit();
// header('location:../member/index.php');
