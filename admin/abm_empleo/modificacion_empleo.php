<?php
	require('clases/cliente.class.php');
	
	$objCliente=new Cliente;
	
	$id = htmlspecialchars(trim($_POST['id']));
	$nombre = htmlspecialchars(trim($_POST['nombre']));
	$descripcion = htmlspecialchars(trim($_POST['descripcion']));
	
	
	//alta noticias
	$mod_noticias=$objCliente->actualiza_noticia($id,$nombre,$descripcion);
	
	//header ("Location: noticias.php");
	
?>