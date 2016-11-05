<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "perpus";

$koneksi = mysql_connect($host, $user, $pass);
$database = mysql_select_db($database);

//cara cek koneksi database
if($koneksi && $database)
{
	//echo "Selamat Datang<br>";
}
else
{
	//echo "!<br>";
}
?>	