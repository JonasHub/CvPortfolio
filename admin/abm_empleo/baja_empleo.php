<?php
	require('clases/cliente.class.php');
	
	$objCliente=new Cliente;
	
	$id = htmlspecialchars(trim($_POST['id']));

	
	//Si enviaramos una imagen
	//$imagen_temporal  = $_FILES["img"]["tmp_name"];
//	$imagen  = $_FILES["img"]["name"];
//	$tipo = $_FILES["img"]["type"];
//	$tamanio = $_FILES["img"]["size"];
//	
//	$fp = fopen($imagen_temporal, 'rb');
//	$contenido = fread($fp, $tamanio);
//	$contenido = addslashes($contenido);
//	fclose($fp);
	//Si enviaramos una imagen
		
	//alta noticias
	$baja_noticias=$objCliente->elimina_noticia($id);
	
	//Si enviaramos una imagen
	//$alta_img=$objCliente->alta_img($contenido,$tipo);
	//header ("Location: noticias.php");
	
?>