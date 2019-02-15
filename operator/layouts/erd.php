<?php
function role($in){
	global $konek;
	$skl 	= "SELECT * FROM role WHERE id =".$in;
	$mes 	= mysqli_query($konek, $skl);
	$mow	= mysqli_fetch_assoc($mes);
	return $mow['nama'];
}