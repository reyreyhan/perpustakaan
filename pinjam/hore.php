<?php
include "go.php";
include "C.php";
include "C2.php";

//$N = $_POST["NO"];
//$N = $_GET['NO'];
$A = $_POST["JUDUL"];
$B = $_POST["KATEGORI"];
$C = $_POST["NIS"];
$D = $_POST["CODE"];
$E = $_POST["TGL"];

	if(empty($C)) {
		header("Refresh:0; url=ecode/1/nama/index.html");
	}  else if(CheckKey("SELECT NIS from anggota WHERE NIS='$C'") == false) {
			header("Refresh:0; url=ecode/1/nama/index.html");
	} else if(CekNIS("SELECT NIS from pinjam WHERE NIS='$C'") == false) {
			header("Refresh:0; url=ecode/1/nama/index.html");
	} else {




$insert = "INSERT INTO pinjam (NO, JUDUL, KATEGORI, NIS, CODE, TGL) VALUES ('', '$A', '$B', '$C', '$D', '$E')";
$insert_query1 = mysql_query($insert);
 

$query1 = mysql_query("delete from perpus . konfirmasi where CODE='$D'") or die (mysql_error());

if($insert_query1 && $query1) 
{
//echo "TERIMAKASIH<br>";
	//header("Refresh:0; url=lanjut.php");
	header('location:../pinjam/index.html');
}

else
{
 echo "Buku yang Anda Masukkan Sudah dipinjam / NIS Anda Tidak Terdaftar";
}
}
?>