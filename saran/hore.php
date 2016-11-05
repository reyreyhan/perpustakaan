<?php
include "go.php";

//$N = $_POST["NO"];
$J = $_POST["NAMA"];
$D = $_POST["EMAIL"];
$L = $_POST["KOM"];


if(empty($J)) {
 //include "ecode/1/nama/index.html";
	header("Refresh:0; url=ecode/1/nama/index.html");
} else {

	if(empty($L)) {
		header("Refresh:0; url=ecode/1/nama/index.html");
	} else {

		if(empty($D)) {
			header("Refresh:0; url=ecode/1/nama/index.html");
		} else {
	    	// check if e-mail address is well-formed
	    	if (!filter_var($D, FILTER_VALIDATE_EMAIL)) {
	    		header("Refresh:0; url=ecode/1/nama/index.html");
	    	} else {


$insert = "INSERT INTO saran (NO, NAMA, EMAIL, KOM) VALUES ('', '$J', '$D', '$L')";

$insert_query1 = mysql_query($insert);
 

if($insert_query1) 
{
//echo "TERIMAKASIH<br>";
	header("Refresh:0; url=../index.php");
}

else
{
echo "Error";
}
}
}
}
}
?>