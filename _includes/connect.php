<?php
	
	$host = "localhost";
	$user = "nortonb_shop";
	$password = "****";
	$db = "nortonb_shop";
	$mysqli = new mysqli($host, $user, $password, $db);
	if ($mysqli->connect_error) {
	    die('Connect Error (' . $mysqli->connect_errno . ') '
	            . $mysqli->connect_error);
	}else{
		//echo("Connected successfully to $db as $user");
	}
?>