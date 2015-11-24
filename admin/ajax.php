<?php
	// connect to db
	mysql_connect("localhost","jonas_eusumo","27011983");
	mysql_select_db("db_eusumo_web");
	
	// require our class
	require_once("grid.php");
	
	// load our grid with a table
	$grid = new Grid("noticias", array(
		"save"=>true,
		"delete"=>true,
	));
?>