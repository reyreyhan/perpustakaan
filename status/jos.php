<?php
include "go.php";

$N = $_GET['NO'];

$query1 = mysql_query("DELETE FROM `pinjam` WHERE `pinjam` . `NO` = '$N'") or die (mysql_error());


 
if ($query1) {
	// header("Refresh:0; url=../index.html");
} else {
	echo "Error Bro";
}

?>