<?php 
include_once("conexion.class.php");

class Noticias{
 //constructor	
  

	
	function Noticias(){
		$this->con=new DBManager;
		
	}
	



//NOTICIAS	
	function ver_noticias(){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM noticias");
			
		}
	}
	
	function ver_ultimas_noticias(){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM noticias LIMIT 3");
			
		}
	}
//NOTICIAS


	

}
?>