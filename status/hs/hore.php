<?php
include "go.php";

//$N = $_POST["NO"];
//$N = $_GET['NO'];
$A = $_POST["JUDUL"];
$B = $_POST["KATEGORI"];
$C = $_POST["NIS"];
$D = $_POST["CODE"];
$E = $_POST["TGL"];
$F = $_POST["TGLB"];





$insert = "INSERT INTO pengembalian (NO, JUDUL, KATEGORI, NIS, CODE, TGL, TGLB) VALUES ('', '$A', '$B', '$C', '$D', '$E', '$F')";
$insert_query1 = mysql_query($insert);
 

$query1 = mysql_query("delete from perpus . pinjam where CODE='$D'") or die (mysql_error());

if($insert_query1 && $query1) 
{
//echo "TERIMAKASIH<br>";
	//header("Refresh:0; url=lanjut.php");
	header('location:../index.html');
}

else
{
 echo "Buku yang Anda Masukkan Sudah dipinjam / NIS Anda Tidak Terdaftar";
}


?>