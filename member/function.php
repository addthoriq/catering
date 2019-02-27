<?php

//bakso
$sql1    = "SELECT * FROM menuacr WHERE status = 1 AND id = 1";
$res1    = mysqli_query($konek, $sql);
$row1    = mysqli_fetch_assoc($res);
$ava1    = "http://localhost/ilma/img/".$row['foto'];

//soto
$sql2    = "SELECT * FROM menuacr WHERE status = 1 AND id = 2";
$res2    = mysqli_query($konek, $sql2);
$row2    = mysqli_fetch_assoc($res2);
$ava2    = "http://localhost/ilma/img/".$row2['foto'];

//rawon
$sql3    = "SELECT * FROM menuacr WHERE status = 1 AND id = 3";
$res3    = mysqli_query($konek, $sql3);
$row3    = mysqli_fetch_assoc($res3);
$ava3    = "http://localhost/ilma/img/".$row3['foto'];

//nasgor
$sql4    = "SELECT * FROM menuacr WHERE status = 1 AND id = 4";
$res4    = mysqli_query($konek, $sql4);
$row4    = mysqli_fetch_assoc($res4);
$ava4    = "http://localhost/ilma/img/".$row4['foto'];

//soto
$sql5    = "SELECT * FROM menuacr WHERE status = 1 AND id = 5";
$res5    = mysqli_query($konek, $sql5);
$row5    = mysqli_fetch_assoc($res5);
$ava5    = "http://localhost/ilma/img/".$row5['foto'];

//soto
$sql6    = "SELECT * FROM menuacr WHERE status = 1 AND id = 6";
$res6    = mysqli_query($konek, $sql6);
$row6    = mysqli_fetch_assoc($res6);
$ava6    = "http://localhost/ilma/img/".$row6['foto'];

//soto
$sql7    = "SELECT * FROM menuacr WHERE status = 1 AND id = 7";
$res7    = mysqli_query($konek, $sql7);
$row7    = mysqli_fetch_assoc($res7);
$ava7    = "http://localhost/ilma/img/".$row7['foto'];

//soto
$sql8    = "SELECT * FROM menuacr WHERE status = 1 AND id = 8";
$res8    = mysqli_query($konek, $sql8);
$row8    = mysqli_fetch_assoc($res8);
$ava8    = "http://localhost/ilma/img/".$row8['foto'];
