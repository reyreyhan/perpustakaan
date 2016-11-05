<?php
function CQ($Q2) {
	$y=mysql_query($Q2);
	if(mysql_num_rows($y) < 2) {
		return true;
	}
	else {
		return false;
	}
}
?>