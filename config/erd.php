<?php

include 'koneksi.php';

function author($id){
	global $konek;
	$sql	= "SELECT * FROM admin WHERE id =".$id;
	$result = mysqli_query($konek, $sql);
	$row	= mysqli_fetch_assoc($result);
	return $row['nama'];
}
