<?php

include 'koneksi.php';
$sql    = "SELECT * FROM menuacr";
$res    = mysqli_query($konek, $sql);
$row = mysqli_fetch_array($res);

echo $row['nama'];

?>
