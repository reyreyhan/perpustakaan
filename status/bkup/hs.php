<?php
include "go.php";

//$N = $_POST["NO"];
$A = $_POST["JUDUL"];
$B = $_POST["KATEGORI"];
$C = $_POST["NIS"];
$D = $_POST["CODE"];
$E = $_POST["TGL"];





$insert = "INSERT INTO history (NO, JUDUL, KATEGORI, NIS, CODE, TGL) VALUES ('', '$A', '$B', '$C', '$D', '$E')";
$insert_query1 = mysql_query($insert);
 

if($insert_query1) 
{
//echo "TERIMAKASIH<br>";
	header("Refresh:0; url=../index.html");
}

else
{
 //echo "Buku yang Anda Masukkan Sudah dipinjam / NIS Anda Tidak Terdaftar";
}
?>