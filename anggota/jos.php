<?php
include "go.php";

$N = $_GET['NIS'];

$query1 = mysql_query("DELETE FROM `anggota` WHERE `anggota` . `NIS` = '$N'") or die (mysql_error());


 
if ($query1) {
	 header("Refresh:0; url=index.html");
} else {
	echo "Error Bro";
}

?>