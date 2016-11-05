<?php
include "go.php";

//$N = $_POST["NO"];
//$B = htmlentities($_POST["NAMA"]);
$B = $_POST["NAMA"];
$C = $_POST["KELAS"];
$D = $_POST["JURUSAN"];
$E = $_POST["ALAMAT"];
$F = $_POST["HP"];
$Y = $_POST["JK"];
$Z = $_POST["NIS"];



if(empty($B)) {
 	header("Refresh:0; url=../ecode/1/nama/index.html");
} else {

	if(empty($E)) {
 	header("Refresh:0; url=../ecode/1/nama/index.html");
	} else {

			if(empty($F)) {
 			header("Refresh:0; url=../ecode/1/nama/index.html");
			} else {
			
							if(empty($Z)) {
							header("Refresh:0; url=../ecode/1/nama/index.html");
							} else {
				
$insert = "INSERT INTO anggota (NO, NIS, NAMA, KELAS, JURUSAN, ALAMAT, HP, JK) VALUES ('', '$Z', '$B', '$C', '$D', '$E', '$F', '$Y')";
$insert_query1 = mysql_query($insert);
 

if($insert_query1) 
{
//echo "TERIMAKASIH<br>";
	header("Refresh:0; url=../index.html");
}

else
{
echo "NIS Sudah ada";
}

}

}

}
}

?>