<div class="one-half last">
						<h4 class="heading">ALTA DE NOTICIAS</h4>
						<!-- form -->
						<script type="text/javascript" src="js/form-validation.js"></script>
						<form id="" action="abm_empleo/alta_empleo.php" method="post" enctype="multipart/form-data">
							<fieldset>
								<div>
									<input placeholder="Titulo noticia..." name="nombre"  id="nombre" type="text" class="form-poshytip" title="Nombre noticia" />
								</div>
								<!--<div>
                                <input type="file" name="img" id="img" class="span2" class="form-poshytip"/>
                                </div>-->
								<div>
									<textarea placeholder="Contenido noticia..."  name="descripcion"  id="descripcion" rows="15" cols="180" class="form-poshytip" title="Contenido"></textarea>
                                    <input type="hidden" id="id" value=""/>
                                    <br>
								</div>
                                <div class="btn-group" data-toggle="buttons-checkbox">
                                   <input type="submit" value="Dale">
                                  
                                </div>
							</fieldset>
						</form>
						<!-- ENDS form -->
					</div><!-- ENDS one half -->