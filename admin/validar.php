<?php
	require('clases/cmsmanager.class.php');
	
	$objCliente = new Cmsmanager;

	$mail = htmlspecialchars(trim($_POST['mail']));
	$password = htmlspecialchars(trim($_POST['password']));

	$validar=$objCliente->consulta_usuario($mail,$password);
	
	echo $validar;
?>