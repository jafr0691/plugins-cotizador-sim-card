<div class="row" style="padding: 5px 5px;">
	<div class="alert alert-success alert-dismissible" id="msjplan" style="display: none">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  <strong>Exito!</strong> Se guardo el plan correctamente.
	</div>
	<form id="formcrearplan">
		<div class="col-md-6">
		  	<div class="box box-danger">
		    	<div class="box-header">
		      		<h3 class="box-title">Crear plan</h3>
		    	</div>
			    <div class="box-body">
			      	<div class="form-group">
			        	<label>Nombre del plan:</label>
			        	<div class="input">
				          	<input type="text" class="form-control" placeholder="Nompre del plan" name="namep" required="required" />
				        </div><!-- /.input group -->
			    	</div><!-- /.form group -->
			    	<div class="form-group">
			        	<label>Pises:</label>
			        	<div class="input">
				          	<strong>Seleccione:</strong>
						    <select id="multiple-checkboxes" multiple="multiple" name="paises[]" required="required">
						        <option value="Estados Unidos">Estados Unidos</option><option value="Argentina">Argentina</option><option value="Bolivia">Bolivia</option><option value="Venezuela">Venezuela</option><option value="Brasil">Brasil</option><option value="Canada">Canada</option><option value="Chile">Chile</option><option value="Costa Rica">Costa Rica</option><option value="Ecuador">Ecuador</option><option value="El Salvador">El Salvador</option><option value="Guatemala">Guatemala</option><option value="Guayanas">Guayanas</option><option value="Haití">Haití</option><option value="Hawai">Hawai</option><option value="Honduras">Honduras</option><option value="Jamaica">Jamaica</option><option value="México">México</option><option value="Nicaragua">Nicaragua</option><option value="Panamá">Panamá</option><option value="Paraguay">Paraguay</option><option value="Perú">Perú</option><option value="Puerto Rico">Puerto Rico</option><option value="República Dominicana">República Dominicana</option><option value="Uruguay">Uruguay</option><option value="EUROPA">EUROPA</option><option value="Alemania">Alemania</option><option value="Austria">Austria</option><option value="Bielorrusia">Bielorrusia</option><option value="Bulgaria">Bulgaria</option><option value="Chipre">Chipre</option><option value="Croacia">Croacia</option><option value="Dinamarca">Dinamarca</option><option value="Eslovaquia">Eslovaquia</option><option value="España">España</option><option value="Estonia">Estonia</option><option value="Finlandia">Finlandia</option><option value="Francia">Francia</option><option value="Georgia">Georgia</option><option value="Grecia">Grecia</option><option value="Holanda">Holanda</option><option value="Hungría">Hungría</option><option value="Irlanda">Irlanda</option><option value="Islandia">Islandia</option><option value="Italia">Italia</option><option value="Letonia">Letonia</option><option value="Lituania">Lituania</option><option value="Macedonia">Macedonia</option><option value="Malta">Malta</option><option value="Moldavia">Moldavia</option><option value="Noruega">Noruega</option><option value="Polonia">Polonia</option><option value="Portugal">Portugal</option><option value="Reino Unido">Reino Unido</option><option value="Rumania">Rumania</option><option value="Serbia">Serbia</option><option value="Suecia">Suecia</option><option value="Suiza">Suiza</option><option value="Turquía">Turquía</option><option value="Ucrania">Ucrania</option><option value="AFRICA Y OCEANÍA">AFRICA Y OCEANÍA</option><option value="Angola">Angola</option><option value="Argelia">Argelia</option><option value="Chad">Chad</option><option value="Congo">Congo</option><option value="Costa de Marfíl">Costa de Marfíl</option><option value="Egipto">Egipto</option><option value="Gabón">Gabón</option><option value="Kenia">Kenia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malí">Malí</option><option value="Marruecos">Marruecos</option><option value="Mauritania">Mauritania</option><option value="Mozambique">Mozambique</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Sahara Occ">Sahara Occ</option><option value="Senegal">Senegal</option><option value="Tanzania">Tanzania</option><option value="Túnez">Túnez</option><option value="Uganda">Uganda</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option><option value="ASIA">ASIA</option><option value="Camboya">Camboya</option><option value="China">China</option><option value="Filipinas">Filipinas</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Irak">Irak</option><option value="Japón">Japón</option><option value="Malasia">Malasia</option><option value="Mongolia">Mongolia</option><option value="Rusia">Rusia</option><option value="Saudarabia">Saudarabia</option><option value="Taiwan">Taiwan</option><option value="Vietnam">Vietnam</option>
						    </select>
				        </div><!-- /.input group -->
			    	</div><!-- /.form group -->

			      <!-- phone mask -->
					<div class="form-group">
						<label>Descripcion:</label>
						<div class="input">
						  	<textarea class="form-control" name="descrip" placeholder="Descripcion del plan" required="required"></textarea>
						</div><!-- /.input group -->
					</div><!-- /.form group -->
					<div class="form-group">
			        	<label>Precio:</label>
			        	<div class="input-group">
				          	<input type="text" class="form-control" name="precio" placeholder="Precio del plan"  required="required"/>
				        </div><!-- /.input group -->
			    	</div><!-- /.form group -->
			    </div><!-- /.box-body -->
		 	</div><!-- /.box -->
		 </div>
		<div class="col-md-6">

			<div class="box box-primary">
	            <div class="box-header">
	              	<h3 class="box-title">Dias</h3>
	            </div>
	            <div class="box-body">
	              	<!-- Date range -->
	              	<div class="form-group">
	              		<div class="input-group" id="agregarformdias">
	                  		<div class="col-md-4 col-sm-12">
	                  			<label>Dias en adelante</label>
	                  			<input type="text" class="form-control pull-right" name="diasmax" value="30" />
	                  		</div>
	                  		<div class="col-md-4 col-sm-12">
	                  			<label>Precio</label>
	                  			<input type="text" class="form-control pull-right" name="pricemax" />
	                  		</div>
	                	</div><!-- /.input group -->
	              	</div><!-- /.form group -->
	                	<div class="input-group" id="agregarformdias">
	                  		<div class="col-md-4 col-sm-12">
	                  			<label>Desde</label>
	                  			<input type="text" class="form-control pull-right" name="desde[]" />
	                  		</div>
	                  		<div class="col-md-4 col-sm-12">
	                  			<label>A</label>
	                  			<input type="text" class="form-control pull-right" name="a[]" />
	                  		</div>
	                  		<div class="col-md-4 col-sm-12">
	                  			<label>Precio</label>
	                  			<input type="text" class="form-control pull-right" name="diasprecio[]" />
	                  		</div>
	                	</div><!-- /.input group -->
	              	</div><!-- /.form group -->

	              	<!-- Date and time range -->
	              	<div class="form-group">
	                	<div class="input-group">
	                  		<div class="btn btn-primary" id="btnformdiasteste">Agregar Dias</div>
	                	</div><!-- /.input group -->
	              	</div><!-- /.form group -->
	            </div><!-- /.box-body -->
	          </div><!-- /.box -->
		</div>
		<div class="col-md-12 col-sm-12 text-center">
		    <input type="submit" class="btn btn-success col-md-12 col-sm-12" value="Guardar" id="btncrearplan">
		</div>
	</form>
</div>
<script type="text/javascript">
	jQuery('#btnformdiasteste').click(function(){
		jQuery('#agregarformdias').after(`<div class="box-header">
              	<h3 class="box-title">Limites de Dias</h3>
            </div><div class="input-group">
                  		<div class="col-md-4 col-sm-12">
                  			<label>Desde</label>
                  			<input type="text" class="form-control pull-right" name="desde[]"/>
                  		</div>
                  		<div class="col-md-4 col-sm-12">
                  			<label>A</label>
                  			<input type="text" class="form-control pull-right" name="a[]"/>
                  		</div>
                  		<div class="col-md-4 col-sm-12">
                  			<label>Precio</label>
                  			<input type="text" class="form-control pull-right" name="diasprecio[]"/>
                  		</div>
                	</div>`);
	});

	jQuery("#btncrearplan").on(touchEvent,function(e){
		var camvac = 0;
		var dat = jQuery("#formcrearplan").serializeArray();
		jQuery.each(dat, function(i, val) {
            if (val.value == "" && camvac==0) {
                alert("Ningun campo puede estar vacio");
                camvac = 1;
            }
        });
		if (camvac == 0) {
			var formplan = $("#formcrearplan").serialize();
	        jQuery.ajax({
	            url: ua_cotiza.ua_cotizaajaxurl,
	            type: "post",
	            data: formplan + '&action=ua_cotiza&acti=crearplan',
	            beforeSend: function() {
	                // jQuery('#fpcargarmailer').css('display', 'inline-block');
	            },
	            success: function(dato) {
	            	jQuery('#msjplan').css('display','block');

	                // if (dato) {
	                //     alert("Se guardaron los cambios.");
	                //     jQuery("#Modalfpmailer").modal("hide");
	                //     jQuery("#btnfpmailer").text("Ajustar Email: " + jQuery("#fpsetfrom").val());
	                // } else {
	                //     alert("Error: no se logro guardar los cambios");
	                // }
	                // jQuery('#fpcargarmailer').css('display', 'none');
	            }
	        });
	    }
        e.preventDefault();
	});
	jQuery(document).ready(function() {
        jQuery('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
          maxHeight: 200
        });
    });
</script>