<?php
$server	= "localhost";
$usr	= "root";
$pass	= "123";
$db		= "catering";

$konek	= mysqli_connect($server, $usr, $pass, $db);

if (!$konek) {
	die("Connection Failed : ".mysqli_connect_error());
}