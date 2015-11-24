<?php 
include_once("conexion.class.php");
include_once("paginator.class.php");

class Cliente{
 //constructor	para clases relacionadas con el grid
  

	
 	function Cliente(){
 		$this->con=new DBManager;
		
 	}
	
	
	function consulta_usuario($usuario,$password){
		if($this->con->conectar()==true){
			$resultado =  mysql_num_rows(mysql_query("SELECT * FROM usuarios WHERE usuario LIKE '".$usuario."' AND password LIKE '".$password."'"));
			if($resultado==1){
				return 1;
				}
			if($resultado==0){
				return 0;
				}	
		}
	}

//NOTICIAS	
	function noticias(){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM noticias");
		}
	}
	
	function alta_noticia($nombre,$descripcion,$fecha){
		if($this->con->conectar()==true){
			return mysql_query("INSERT INTO noticias ( nombre, descripcion, fecha ) VALUES ('".$nombre."', '".$descripcion."', '".$fecha."')");
			return mysql_query('&quot;SET NAMES utf8&quot;');
		}
	}
	
	function elimina_noticia($id){
		if($this->con->conectar()==true){
			return mysql_query("DELETE FROM noticias WHERE id='".$id."'");
		}
	}
	
	function actualiza_noticia($id,$nombre, $descripcion){
		if($this->con->conectar()==true){
			return mysql_query("UPDATE noticias SET nombre='".$nombre."', descripcion='".$descripcion."' WHERE id='".$id."'");
		}
	}
	
	function paginador(){
		if($this->con->conectar()==true){
			$num_rows =  mysql_query("SELECT COUNT(*) FROM noticias");
			$pages = new Paginator;
			$pages->items_total = $num_rows[0];
			$pages->mid_range = 3;
			$pages->paginate();
			$result = mysql_query("SELECT * FROM noticias ORDER BY id ASC '".$pages->limit."'");
			while ($rows = mysql_fetch_array($result))
			{
								
                echo "<td><?php echo (\$result[\'id\']) ?></td>";
                               
			}

			
			echo "<li>". $pages->display_jump_menu(). $pages->display_items_per_page() . "</li>";
			
			echo "Page $pages->current_page of $pages->num_pages";

		}
	}
//NOTICIAS

function alta_img($data,$tipo){

	if($this->con->conectar()==true){ 
		return mysql_query("INSERT INTO imagenes (imagen, tipo_imagen) VALUES ('".$data."', '".$tipo."')") ;
	}
	
}//Function




	

}
?>