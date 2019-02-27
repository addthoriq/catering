<?php
session_start();
include 'koneksi.php';

//on register.php
$email 	= $_POST['email'];
$pass 	= md5($_POST['password']);
$nama	  = $_POST['nama'];
$hp     = $_POST['hp'];
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

$skl  = "INSERT INTO user (nama, hp, email, jkl, password, foto, status, tanggal, role_id) VALUES ('$nama', '$hp', '$email', $jkl, '$pass', '$gambar', $stt, '$tgl', $role)";

mysqli_query($konek, $skl);

$sql1 	= "SELECT * FROM op WHERE email = '$email' AND password = '$pass'";
$qry1	= mysqli_query($konek, $sql1);
$row1 	= mysqli_fetch_assoc($qry1);

$sql2 	= "SELECT * FROM admin WHERE email = '$email' AND password = '$pass'";
$qry2	= mysqli_query($konek, $sql2);
$row2 	= mysqli_fetch_assoc($qry2);

$sql3 	= "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
$qry3	= mysqli_query($konek, $sql3);
$row3 	= mysqli_fetch_assoc($qry3);

if (!empty($email) && !empty($pass)) {

	if ($row1) {
		$_SESSION['emailop'] 	= $email;
		$_SESSION['namaop']	= $row1['nama'];
		$_SESSION['fotoop']	= $row1['foto'];
		$_SESSION['idop']		= $row1['id'];
		$_SESSION['passop']	= $row1['password'];

		header('location: ../operator/index.php');
	}elseif ($row2) {
		$_SESSION['emailadm'] 	= $email;
		$_SESSION['namaadm']	= $row2['nama'];
		$_SESSION['fotoadm']	= $row2['poto'];
		$_SESSION['idadm']		= $row2['id'];
		$_SESSION['passadm']	= $row2['password'];

		if ($row2['status']==1) {
			header('location: ../admin/index.php');
		}else{
			echo "Akun Anda Tidak Aktif";
		};
	}elseif ($row3) {
		$_SESSION['emailusr'] 	= $email;
		$_SESSION['namausr']	= $row3['nama'];
		$_SESSION['fotousr']	= $row3['foto'];
		$_SESSION['idusr']		= $row3['id'];
		$_SESSION['passusr']	= $row3['password'];
		$_SESSION['alamatusr'] = $row3['alamat'];
		$_SESSION['hpusr']		= $row3['hp'];
    $_SESSION['jklusr']   = $row3['jkl'];
    $_SESSION['roleusr']     = $row3['role_id'];

    if ($row3['status']==1) {
			header('location: ../member/index.php');
		}else{
			echo "Akun Anda Tidak Aktif";
		};
	}else{
		echo "Email anda Salah";
	}

}else{
	echo "Email dan Password Anda Kosong";
};
