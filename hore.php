<?php
include "go.php";

//$N = $_POST["NO"];
$J = $_POST["NAMA"];
$D = $_POST["JURUSAN"];
$L = $_POST["TGL"];
$K = $_POST["KELAS"];


if(empty($J)) {
 include "ecode/1/nama/index.html";
} else {

$insert = "INSERT INTO absensi (NO, NAMA, JURUSAN, TGL, KELAS) VALUES ('', '$J', '$D', '$L', '$K')";

$insert_query1 = mysql_query($insert);
 

if($insert_query1) 
{
//echo "TERIMAKASIH<br>";
	header("Refresh:0; url=index.php");
}

else
{
echo "Ada yang Salah!!!";	
}

}
?>