<?php
include "go.php";

$N = $_GET['CODE'];

$query1 = mysql_query("DELETE FROM `data_buku` WHERE `data_buku` . `CODE` = '$N'") or die (mysql_error());


 
if ($query1) {
	 header("Refresh:0; url=index.php");
} else {
	echo "Error Bro";
}

?>