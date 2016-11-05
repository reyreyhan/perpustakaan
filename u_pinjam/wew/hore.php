<?php
include "go.php";
include "C.php";
include "C2.php";

//$N = $_POST["NO"];
$A = $_POST["JUDUL"];
$B = $_POST["KATEGORI"];
$C = $_POST["NIS"];
$D = $_POST["CODE"];
$E = $_POST["TGL"];


	if(empty($C)) {
		header("Refresh:0; url=../ecode/1/nama/index.html");
	} 

	else {

		if(CheckKey("SELECT NIS from anggota WHERE NIS='$C'") == false) {
			header("Refresh:0; url=../ecode/1/nama/index.html");
		} else {
			
					if(CQ("SELECT NIS from konfirmasi WHERE NIS='$C'") == false) {
					header("Refresh:0; url=../ecode/1/nama/index.html");
					} else {

$insert = "INSERT INTO konfirmasi (NO, JUDUL, KATEGORI, NIS, CODE, TGL) VALUES ('', '$A', '$B', '$C', '$D', '$E')";
$insert_query1 = mysql_query($insert);
 

if($insert_query1) 
{
//echo "TERIMAKASIH<br>";
	header("Refresh:0; url=../index.html");
}

else
{
 header("Refresh:0; url=../ecode/1/nama/index.html");
}

}
}

}
?>