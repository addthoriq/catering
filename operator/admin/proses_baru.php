<?php
session_start();
include '../../config/koneksi.php';

$nama	= $_POST['nama'];
$email	= $_POST['email'];
$pass	= md5($_POST['pass']);
$stat 	= 1;
$tgl 	= date('Y-m-d');
$role 	= 2;
$jkl    = $_POST['jkl'];

// Upload Avatar
$nama_gambar	= $_FILES['gambar']['name'];
$tmp_name		= $_FILES['gambar']['tmp_name'];

if (empty($nama_gambar)) {
  if ($jkl == 1) {
    $gambar = "male.png";
  }else {
    $gambar = "female.png";
  }
}else {
  $acak			= rand(1111111, 9999999).".jpg";
  $gambar			= str_replace($nama_gambar, $acak, $nama_gambar);
  move_uploaded_file($tmp_name, "../../admin/avatar/".$gambar);
};

$sql	= "INSERT INTO admin (nama, email, password, poto, status, tanggal, role_id, jkl) VALUES ('$nama', '$email', '$pass', '$gambar', '$stat', '$tgl', '$role', $jkl)";

mysqli_query($konek, $sql);
header('location: index.php');
