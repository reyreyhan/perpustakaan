<?php
include "go.php";

$N = $_GET['NO'];

$query1 = mysql_query("delete from perpus . pinjam where NO='$N'") or die (mysql_error());

if ($query1) {
    header('location:../index.html');
//echo "yes";
}
?>