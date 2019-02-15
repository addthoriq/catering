<?php
session_start();
include '../../config/koneksi.php';

$id 	= $_GET['id'];
$sql	= "DELETE FROM menulangg WHERE id = '$id'";

mysqli_query($konek, $sql);
header('location: index.php');