<?php require("head.php"); ?>
<?php require('clases/cmsmanager.class.php'); 
	header("Content-Type: text/html;charset=utf-8");
?>
<?php 
session_start();
if(isset($_SESSION['sesion']))
{ ?>
	</div>
		</header>
		

		<!-- MAIN -->
		<div id="main">	
			<div class="wrapper clearfix">
				<!-- masthead -->
				<div class="masthead clearfix">
					<h1>EDICION DE NOTICIAS</h1><span class="subheading"></span>
				</div>
				<div class='mh-div'></div>
				<!-- ENDS masthead -->
				<!-- page content -->
	        	<div id="page-content" class="clearfix"> 
					<!-- 2 cols -->
                    <div class="one-half"><!--Tabla contenidos-->
                    <h4 class="heading">LISTA DE NOTICIAS</h4>
                        
					
                    
                    <table width="100%" style="background-color:#FFF" class="table table-bordered">
                    <thead>
                    <tr>
                    <th>ID</th>
                    <th style="width:50px">Titulo</th>
                    <th style="width:80px">Descripción</th>
                    <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysql_fetch_assoc($rs))
                    {
                    $id = $row["id"];
                    $name = utf8_encode(html_entity_decode($row["nombre"]));
                    $desc = utf8_encode($row["descripcion"]);
                    ?>
                    <tr class="id_fila" id="<?php echo $id ?>">
                        <td class="id_noticia" data="<?php echo $id ?>"><?php echo $id ?></td>
                        <td class="nombre_noticia" data="<?php echo $name ?>" ><?php echo $name ?></td>
                        <td style="width:80px" class="descripcion_noticia" data="<?php echo $desc ?>"><?php echo $desc ?></td>
                        <td><i class=" icon-edit"></i></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                    </table>
                    
                    


                       
                   </div><!--Fin Tabla contenidos-->
                    
                    
					
                    
                    
					<!-- ENDS 2 cols -->
                    <div class="clearfix"></div>
                    <!-- 2 cols -->
					
        		</div>
        		<!-- ENDS page content -->
			<!-- Fold image -->
			<div id="fold"></div>
			</div>
			
		</div>
		<!-- ENDS MAIN -->
 <?php } ?>    
<?php require("footer.php") ?>		
		
		