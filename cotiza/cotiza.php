<?php
    if(isset($_GET['cantida']) and isset($_GET['id'])){
	    WC()->cart->empty_cart();
		if (WC()->cart->get_cart_contents_count() == 0) {
			$id_plan = $_GET['id'];
			$cantidad = $_GET['cantida'];
            WC()->cart->add_to_cart($id_plan, $cantidad);
            echo "<script type='text/javascript'>setTimeout(function() {window.location='".wc_get_checkout_url()."';}, 2000)</script>";
		}
	}
?>
<link rel='stylesheet' href='<?php echo UAARC; ?>cotiza/css/hello-elementor-style.min.css'>
<link rel='stylesheet' href='<?php echo UAARC; ?>cotiza/css/hello-elementor-theme.min.css'>
<link rel='stylesheet' href='<?php echo UAARC; ?>cotiza/css/elementor-assets-lib-animations-animations.min.css'>
<link rel='stylesheet' href='<?php echo UAARC; ?>cotiza/css/elementor-assets-css-frontend-legacy.min.css'>
<link rel='stylesheet' href='<?php echo UAARC; ?>cotiza/css/elementor-assets-css-frontend.min.css'>
<link rel='stylesheet' href='<?php echo UAARC; ?>cotiza/css/elementor-css-post-61.css'>
<link rel='stylesheet' href='<?php echo UAARC; ?>cotiza/css/elementor-css-post-93.css'>
<style type="text/css">
	.contenedor_carga_coti{
		background-color: rgba(242, 239, 241, 0.8);
		height: 100%;
		width: 100%;
		position: fixed;
		-webkit-transition: all 1s ease;
		-o-transition: all 1s ease;
		transition: all 1s ease;
		z-index: 10000;
		top: 0;
		left: 0;
	}
	.carga_coti{
		border: 15px solid #121359;
		border-top-color: #f39300;
		border-top-style: groove;
		height: 100px;
		width: 100px;
		border-radius: 100%;

		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		margin: auto;
		animation-name: girar;
		animation-duration: 1.5s;
		animation-direction:  linear;
		animation-iteration-count: infinite;
	}
	.option-plan-mejorado input[type="radio"]:checked {
		background-color: #0060df;
	}
	/* The Modal (background) */
	.modal {
	position: fixed; 
	display: none;
	z-index: 1000;
	padding-top: 100px;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: rgb(0,0,0);
	background-color: rgba(0,0,0,0.4);
	}

	/* Modal Content */
	.modal-content {
	background-color: #fefefe;
	margin: auto;
	padding: 20px;
	border: 1px solid #888;
	width: 40%;
	}

	/* The Close Button */
	.close {
	color: #aaaaaa;
	float: right;
	font-size: 28px;
	font-weight: bold;
	}

	.close:hover,
	.close:focus {
	color: #000;
	text-decoration: none;
	cursor: pointer;
	}
	@keyframes girar{
		from {transform: rotate(0deg);}
		to {transform: rotate(360deg);}
	}
</style>
			<div data-elementor-type="wp-page" data-elementor-id="61" class="elementor elementor-61" data-elementor-settings="[]">
				<div class="contenedor_carga_coti">
					<div class="carga_coti"></div>
				</div>
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-4c8a426 elementor-widget elementor-widget-heading" data-id="4c8a426" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">COTIZA TU SIMCARD INTERNACIONAL ILIMITADA</h2></div>
				</div>
				<div class="elementor-element elementor-element-7b922f9 elementor-button-align-end elementor-mobile-button-align-stretch elementor-widget elementor-widget-form" data-id="7b922f9" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Siguiente&quot;,&quot;step_previous_label&quot;:&quot;Regresar&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
				<div class="elementor-widget-container">
					<form class="elementor-form" method="post" name="cotizador" action="" id="form_cotizador">

							<input type="hidden" name="id_plan" value="" id="id_plan" />
							<input type="hidden" name="cantida_dias" value="" id="cantida_dias" />
							<input type="hidden" name="cantida_card" value="" id="cantida_card" />
							<input type="hidden" name="tarifa_dias" value="" id="tarifa_dias" />
							<input type="hidden" name="costo_plan" value="" id="costo_plan" />
							<input type="hidden" name="costtotal" value="" id="costtotal" />
							<input type="hidden" name="nameplan" value="" id="nameplan" />
							<input type="hidden" name="descriptplan" value="" id="descriptplan" />

			<div class="elementor-form-fields-wrapper elementor-labels-above">
								<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_6ed5565 elementor-col-100">
					<label for="form-field-field_6ed5565" class="elementor-field-label">Destino del viaje:</label>		<div class="elementor-field elementor-select-wrapper ">
			<select name="form_fields[field_6ed5565]" id="form-pises" class="elementor-field-textual elementor-size-xs">
				<option value="Estados Unidos">Estados Unidos</option><option value="Argentina">Argentina</option><option value="Bolivia">Bolivia</option><option value="Venezuela">Venezuela</option><option value="Brasil">Brasil</option><option value="Canada">Canada</option><option value="Chile">Chile</option><option value="Costa Rica">Costa Rica</option><option value="Ecuador">Ecuador</option><option value="El Salvador">El Salvador</option><option value="Guatemala">Guatemala</option><option value="Guayanas">Guayanas</option><option value="Haití">Haití</option><option value="Hawai">Hawai</option><option value="Honduras">Honduras</option><option value="Jamaica">Jamaica</option><option value="México">México</option><option value="Nicaragua">Nicaragua</option><option value="Panamá">Panamá</option><option value="Paraguay">Paraguay</option><option value="Perú">Perú</option><option value="Puerto Rico">Puerto Rico</option><option value="República Dominicana">República Dominicana</option><option value="Uruguay">Uruguay</option><option value="EUROPA">EUROPA</option><option value="Alemania">Alemania</option><option value="Austria">Austria</option><option value="Bielorrusia">Bielorrusia</option><option value="Bulgaria">Bulgaria</option><option value="Chipre">Chipre</option><option value="Croacia">Croacia</option><option value="Dinamarca">Dinamarca</option><option value="Eslovaquia">Eslovaquia</option><option value="España">España</option><option value="Estonia">Estonia</option><option value="Finlandia">Finlandia</option><option value="Francia">Francia</option><option value="Georgia">Georgia</option><option value="Grecia">Grecia</option><option value="Holanda">Holanda</option><option value="Hungría">Hungría</option><option value="Irlanda">Irlanda</option><option value="Islandia">Islandia</option><option value="Italia">Italia</option><option value="Letonia">Letonia</option><option value="Lituania">Lituania</option><option value="Macedonia">Macedonia</option><option value="Malta">Malta</option><option value="Moldavia">Moldavia</option><option value="Noruega">Noruega</option><option value="Polonia">Polonia</option><option value="Portugal">Portugal</option><option value="Reino Unido">Reino Unido</option><option value="Rumania">Rumania</option><option value="Serbia">Serbia</option><option value="Suecia">Suecia</option><option value="Suiza">Suiza</option><option value="Turquía">Turquía</option><option value="Ucrania">Ucrania</option><option value="AFRICA Y OCEANÍA">AFRICA Y OCEANÍA</option><option value="Angola">Angola</option><option value="Argelia">Argelia</option><option value="Chad">Chad</option><option value="Congo">Congo</option><option value="Costa de Marfíl">Costa de Marfíl</option><option value="Egipto">Egipto</option><option value="Gabón">Gabón</option><option value="Kenia">Kenia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malí">Malí</option><option value="Marruecos">Marruecos</option><option value="Mauritania">Mauritania</option><option value="Mozambique">Mozambique</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Sahara Occ">Sahara Occ</option><option value="Senegal">Senegal</option><option value="Tanzania">Tanzania</option><option value="Túnez">Túnez</option><option value="Uganda">Uganda</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option><option value="ASIA">ASIA</option><option value="Camboya">Camboya</option><option value="China">China</option><option value="Filipinas">Filipinas</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Irak">Irak</option><option value="Japón">Japón</option><option value="Malasia">Malasia</option><option value="Mongolia">Mongolia</option><option value="Rusia">Rusia</option><option value="Saudarabia">Saudarabia</option><option value="Taiwan">Taiwan</option><option value="Vietnam">Vietnam</option>			</select>
		</div>
						</div>
								<div class="elementor-field-type-html elementor-field-group elementor-column elementor-field-group-field_e142619 elementor-col-100">
					<p class="rplan" id="plandescrip"></p>
				</div>
				<div class="elementor-field-type-checkbox elementor-field-group elementor-column elementor-field-group-field_fd2b945 elementor-col-100" id="plandescripmejorado">

			</div>
								<div class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-field_cdafdf3 elementor-col-50 elementor-sm-50 elementor-field-required">
					<label for="form_dias" class="elementor-field-label">Días de servicio</label><input type="number" name="form_dias" id="form_dias" class="elementor-field elementor-size-xs  elementor-field-textual" placeholder="Introduce los días." value="1"  required="required" aria-required="true" min="" max="">				</div>
								<div class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-field_4f7337d elementor-col-50 elementor-sm-50 elementor-field-required">
					<label for="form_card" class="elementor-field-label">Viajeros</label><input type="number" name="form_card" id="form_card" class="elementor-field elementor-size-xs  elementor-field-textual" placeholder=" (Sim Card)" value="1" required="required" aria-required="true" min="" max="">				</div>
								<div class="elementor-field-type-checkbox elementor-field-group elementor-column elementor-field-group-field_fe4f06c elementor-col-100">
					<div class="elementor-field-subgroup  "><span class="elementor-field-option"><input type="checkbox" value="1" id="form_envio" name="form_envio"> <label for="form_envio">Enviar a domicilio</label></span></div>				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<button type="submit" class="elementor-button elementor-size-sm elementor-animation-grow"style="margin-bottom: 1rem;" id="btncotizar">
						COTIZAR
						</button>
					</div>
				</div>
								<div class="elementor-field-type-html elementor-field-group elementor-column elementor-field-group-field_c770e33 elementor-col-100" style="padding-left: 2rem;">
					<div style="background-color:#FFF;">


<table class="default">
  <tr>
    <td>Nombre del Plan: </td>

    <td><strong id="nplan"></strong></td>
  </tr>

<tr>
    <td>Tarifa Diaria: </td>
    <td id="diaria"> USD</td>

  </tr>
<tr>
    <td>Costo de envio: </td>
    <td id="envio"> USD</td>

  </tr>

<tr>
    <td>Costo total: </td>
    <td><span style="color:#F39300;" id="total">  USD </span></td>

  </tr>
</table>
<p> </p>
<p>  </p>
<p></p>

 <p></p>
</div>				</div>

			<div class="row" style="display: flex; justify-content: space-between; width: 100%;">
				<div class="col-md-7 col-sm-12">
					<div class="elementor-element elementor-element-51cdfa2 elementor-align-left elementor-mobile-align-justify elementor-widget elementor-widget-button" data-id="51cdfa2" data-element_type="widget" data-widget_type="button.default">
						<buttom class="elementor-button-link elementor-button elementor-size-sm" role="button" id="BtnMailer"  data-toggle="modal" data-target="formmodalemail">
						Enviar cotización por email
						</buttom>
					</div>
				</div>
				</form>

				<div class="col-md-5 col-sm-12">
					<button type="submit" class="elementor-button elementor-size-sm elementor-animation-grow" id="btncompra">
					COMPRAR AHORA
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="formmodalemail" class="modal fade" role="dialog">
  	<div class="modal-dialog">
    	<div class="modal-content">
    		<div>
				<div class="elementor-section-wrap">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-215c431d elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="215c431d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-10e5d841" data-id="10e5d841" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-4b17b8b3 elementor-widget elementor-widget-heading" data-id="4b17b8b3" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h4 class="elementor-heading-title elementor-size-default">Enviar Cotización por Email</h4>
													<span class="close">&times;</span>
												</div>
											</div>
											<div class="elementor-element elementor-element-a27a6d9 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="a27a6d9" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
												<div class="elementor-widget-container">
													<form class="elementor-form" method="post" name="New Form">
														<input type="hidden" name="post_id" value="93"/>
														<input type="hidden" name="form_id" value="a27a6d9"/>

														<input type="hidden" name="queried_id" value="61"/>

														<div class="elementor-form-fields-wrapper elementor-labels-above">
															<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
																<label for="form-field-name" class="elementor-field-label">Nombre</label>
																<input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Nombre">
															</div>
															<div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
																<label for="form-field-email" class="elementor-field-label">Email</label>
																<input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Tu email" required="required" aria-required="true">
															</div>
															<div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-field_f4c8c11 elementor-col-100">
																<label for="form_enviar_whatsapp" class="elementor-field-label">Whatsapp</label>
																<input size="1" type="tel" name="form_enviar_whatsapp" id="form_enviar_whatsapp" class="elementor-field elementor-size-sm  elementor-field-textual" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
															</div>
															<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
																<button type="submit" class="elementor-button elementor-size-sm">
																	<span >
																		<span class=" elementor-button-icon"></span>
																		<span class="elementor-button-text">Enviar</span>
																	</span>
																</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
	    						</div>
	  						</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
//  (function($) {
//      var touchEvent = 'ontouchstart' in window ? 'touchstart' : 'click';
//     jQuery('#btncompra').on(touchEvent,function(e){
//         e.preventDefault();
//         var id = jQuery('#id_plan').val();
//         var cantidad = jQuery('#cantida_pedido').val();
//         if(id!="" && cantidad!=""){
//             window.open(window.location.href+'?id_plan='+id+'&cantida_pedido='+cantidad);
//         }
//     });
// })(jQuery);

(function(d) {
var modal = d.getElementById("formmodalemail");

var btn = d.getElementById("BtnMailer");

var span = d.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
})(document);
</script>