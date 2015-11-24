<?php 
include_once("conexion.class.php");
include_once("paginator.class.php");

class Cmsmanager{

	//constructor
 	function Cmsmanager(){
 		$this->con=new DBmanager;	
 	}
	
	
	function consulta_usuario($mail,$password){
		if($this->con->conectar()==true){
			$resultado =  mysql_num_rows(mysql_query("SELECT * FROM usuario WHERE mail LIKE '".$mail."' AND password LIKE '".$password."' "));
			if($resultado==1){
				return 1;
				}
			if($resultado==0){
				return ($mail + $password);
				}	
		}
	}

	function alta_empleo($nombre, $titulo, $descripcion, $fecha_desde, $fecha_hasta){
		if($this->con->conectar()==true){
			return mysql_query("INSERT INTO empleo ( nombre, titulo, descripcion, fecha_desde, fecha_hasta ) VALUES ('".$nombre."', '".$titulo."', '".$descripcion."' , '".$fecha_desde."' , '".$fecha_hasta."')");
			return mysql_query('&quot;SET NAMES utf8&quot;');
		}
	}



}//End class
?>