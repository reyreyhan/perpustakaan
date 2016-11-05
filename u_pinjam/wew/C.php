<?php
function CheckKey($Q) {
	$yes=mysql_query($Q);
	if(mysql_num_rows($yes) > 0) {
		return true;
	}
	else {
		return false;
	}
}
?>