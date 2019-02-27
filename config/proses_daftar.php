<?php
include 'koneksi.php';

//on register.php
$nama	  = $_POST['nama'];
$emailmbr	= $_POST['emailmbr'];
$hp     = $_POST['hp'];
$passmbr	  = md5($_POST['password']);
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

$skl  = "INSERT INTO user (nama, hp, email, jkl, password, foto, status, tanggal, role_id) VALUES ('$nama', '$hp', '$emailmbr', $jkl, '$pass', '$gambar', $stt, '$tgl', $role)";

mysqli_query($konek, $skl);
header('location: ../config/proses_login.php');
