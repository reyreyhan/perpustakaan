<?php
include "go.php";

//$N = $_POST["NO"];
$A = $_POST["JUDUL"];
$B = $_POST["PENGARANG"];
$C = $_POST["PENERBIT"];
$D = $_POST["TAHUN"];
$E = $_POST["KATEGORI"];
$F = $_POST["CODE"];


if(empty($A)) {
	header("Refresh:0; url=../ecode/1/nama/index.html");
} 

else {

if(empty($F)) {
 header("Refresh:0; url=../ecode/1/nama/index.html");
} else { 

if(empty($B)) {
 header("Refresh:0; url=../ecode/1/nama/index.html");
} else { 

if(empty($C)) {
 header("Refresh:0; url=../ecode/1/nama/index.html");
} else { 

$insert = "INSERT INTO data_buku (NO, JUDUL, PENGARANG, PENERBIT, TAHUN, KATEGORI, CODE) VALUES ('', '$A', '$B', '$C', '$D', '$E', '$F')";
$insert_query1 = mysql_query($insert);
 
if($insert_query1) 
{
//echo "TERIMAKASIH<br>";
	header("Refresh:0; url=../index.html");
}

else
{
echo "CODE Buku Sudah Ada";
}

}

}

}

}
?>