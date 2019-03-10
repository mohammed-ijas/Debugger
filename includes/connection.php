<?php

  	require_once("config.php");
	$mysqli = mysqli_connect($server, $sqlid, $sqlpass, $dbase);
	if(!$mysqli){die("DB connection failed". mysqli_connect_error());}

?>
