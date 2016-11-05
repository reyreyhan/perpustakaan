<?php
function CekNIS($Q3) {
	$yo=mysql_query($Q3);
	if(mysql_num_rows($yo) < 2) {
		return true;
	}
	else {
		return false;
	}
}
?>