<?php
	
	header("Content-Type: text/html;charset=utf-8");
	include('../clases/cmsmanager.class.php');
	
	$objCliente=new Cmsmanager;
	
	$nombre = htmlspecialchars(trim($_POST['nombre']));
	$descripcion = htmlspecialchars(trim($_POST['descripcion']));
	$titulo = "WTFFF";
	
	$fecha_desde = date("d/m/Y");
	$fecha_hasta = date("d/m/Y");
	
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
	$alta_empleo=$objCliente->alta_empleo($nombre, $titulo ,$descripcion,$fecha_desde, $fecha_hasta);
	
	//Si enviaramos una imagen
	//$alta_img=$objCliente->alta_img($contenido,$tipo);
	//header ("Location: noticias.php");
	
?>