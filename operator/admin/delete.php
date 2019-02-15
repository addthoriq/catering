<?php
session_start();
include '../../config/koneksi.php';

$id 	= $_GET['id'];
$sql	= "DELETE FROM admin WHERE id = '$id'";

mysqli_query($konek, $sql);
header('location: index.php');