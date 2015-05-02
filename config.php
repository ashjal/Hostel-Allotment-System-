<?php

	@$connect=mysql_connect("localhost","root") or die("Couldn't connect");
	mysql_select_db('hostel_g') or die('Could not find db...');

?>
