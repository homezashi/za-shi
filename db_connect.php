<?php
	$con = mysql_connect('localhost','deksilp','home6413') or die(mysql_error());
	mysql_select_db('deksilp_stulist' , $con);
	
	mysql_query("SET NAMES UTF8");
?>