<?php

if($_POST['acti'] == 'crearplan'){

	$objProduct = new WC_Product();

	$objProduct->set_name($_POST['namep']);
	$objProduct->set_status("publish");  // can be publish,draft or any wordpress post status
	$objProduct->set_catalog_visibility('visible'); // add the product visibility status
	$objProduct->set_description($_POST['descrip']);
	$objProduct->set_price($_POST['precio']); // set product price
	$objProduct->set_regular_price($_POST['precio']); // set product regular price
	$objProduct->set_manage_stock(FALSE); // true or false
	$objProduct->set_stock_quantity(0);
	$objProduct->set_stock_status('instock'); // in stock or out of stock value
	$objProduct->set_backorders('no');
	$objProduct->set_reviews_allowed(FALSE);
	$objProduct->set_sold_individually(FALSE);
	$product_id = $objProduct->save();

	if (!empty($_POST['desde']) AND !empty($_POST['a']) AND !empty($_POST['diasprecio'])) {
		$datos = array();
		for ($i=0; $i < count($_POST['desde']); $i++) {
			$datos[$i] = array("regular_price"=>$_POST['diasprecio'][$i],"price"=>$_POST['diasprecio'][$i],"attributes"=>array(array("name"=>"dias","option"=>$_POST['desde'][$i]."-".$_POST['a'][$i])));
		}

	}
	$i++;
	$datos[$i] = array("regular_price"=>$_POST['pricemax'],"price"=>$_POST['pricemax'],"attributes"=>array(array("name"=>"dias","option"=>$_POST['diasmax'])));


	if($datos){
	    try{
	        foreach($datos as $variation){
	            $objVariation = new WC_Product_Variation();
	            $objVariation->set_price($variation["price"]);
	            $objVariation->set_regular_price($variation["regular_price"]);
	            $objVariation->set_parent_id($product_id);
	            if(isset($variation["sku"]) && $variation["sku"]){
	                $objVariation->set_sku($variation["sku"]);
	            }
	            $objVariation->set_manage_stock(FALSE);
	            $objVariation->set_stock_quantity(0);
	            $objVariation->set_stock_status('instock');
	            $var_attributes = array();
	            foreach($variation["attributes"] as $vattribute){
	                $taxonomy = "pa_".wc_sanitize_taxonomy_name(stripslashes($vattribute["name"])); // name of variant attribute should be same as the name used for creating product attributes
                $attr_val_slug =  wc_sanitize_taxonomy_name(stripslashes($vattribute["option"]));
                $var_attributes[$taxonomy]=$attr_val_slug;
	            }
	            $objVariation->set_attributes($var_attributes);
	            $objVariation->save();
	        }
	    }
	    catch(Exception $e){
	        // handle exception here
	    }
	}
	$datpaises = json_encode($_POST['paises']);
	$regisAgante = $wpdb->insert( $wpdb->prefix . "sim_card_relaciones_plan",
	    array(
	        'producto_id'=> $product_id,
	        'paises'=> $datpaises ,
	    )
	  );
	wp_die($product_id);
}else if($_POST['acti'] == 'pais'){
	$chosen_shipping_method_price = WC()->session->get('cart_totals')['shipping_total'];
	$envio = ($chosen_shipping_method_price==0) ? 3 : $chosen_shipping_method_price;
	// $envio = json_encode($shipping_classes);
	$planes = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "sim_card_relaciones_plan ");
	$ii=0;
	foreach ($planes as $plan) {

		foreach (json_decode($plan->paises) as $pais) {
			if($_POST['paises']==$pais){
				$product = wc_get_product($plan->producto_id);
				// echo "<pre>"; print_r( $product ); echo "<pre>";
				$product_content  = $product->get_description();
				$product_name  = $product->get_name();
				$product_price = $product->get_price();
				$product_price_regular = $product->get_regular_price();

				$handle = new WC_Product_Variable($plan->producto_id );
				$variationData = $handle->get_children();
				$i=0;
				if ($variationData) {
					foreach ($variationData as $value) {
            			$diast = get_metadata( 'post', $value, 'attribute_pa_dias', FALSE );
            			$dprecio = get_metadata( 'post', $value, '_price', FALSE );
            			$separar = explode("-", $diast[0]);
            			if (!empty($separar[1])) {
            				$desde[$i] = $separar[0];
            				$a[$i] = $separar[1];
            				$entredias[$i] = array('id_variation'=>$value,'desde'=>$desde[$i],'a'=>$a[$i], 'diasprecio'=>$dprecio[0]);
            			}else{
            				$entredias[$i] = array('id_variation'=>$value,'desde'=>$diast[0],'a'=>10000, 'diasprecio'=>$dprecio[0]);
            			}
            			$i++;
					}
				}

				$datos[$ii] = array('envio'=>$envio,'id_plan' => $plan->producto_id,'descrip' => $product_content, 'plan' => $product_name, 'price' => $product_price, 'entredias'=> $entredias);
				$ii++;
			}
		}
	}
	wp_die(json_encode($datos));
}else if($_POST['acti']== 'mejorplan'){
	$chosen_shipping_method_price = WC()->session->get('cart_totals')['shipping_total'];
	$envio = ($chosen_shipping_method_price==0) ? 3 : $chosen_shipping_method_price;

	$product = wc_get_product($_POST['idplanmejor']);
	$product_content  = $product->get_description();
	$product_name  = $product->get_name();
	$product_price = $product->get_price();
	$handle = new WC_Product_Variable($_POST['idplanmejor']);
	$variationData = $handle->get_children();
	$i=0;
	if ($variationData) {
		foreach ($variationData as $value) {
			$id_variation[$i] = $value;
			$diast = get_metadata( 'post', $value, 'attribute_pa_dias', FALSE );
			$dprecio = get_metadata( 'post', $value, '_price', FALSE );
			$separar = explode("-", $diast[0]);
			if (!empty($separar[1])) {
				$desde[$i] = $separar[0];
				$a[$i] = $separar[1];
				$entredias[$i] = array('id_variation'=>$id_variation[$i],'desde'=>$desde[$i],'a'=>$a[$i], 'diasprecio'=>$dprecio[0]);
			}else{
				$entredias[$i] = array('id_variation'=>$id_variation[$i],'desde'=>$diast[0],'a'=>10000, 'diasprecio'=>$dprecio[0]);
			}
			$i++;
		}
	}

	$datos = array('envio'=>$envio,'id_plan' => $_POST['idplanmejor'],'descrip' => $product_content, 'plan' => $product_name, 'price' => $product_price, 'entredias'=> $entredias);

	wp_die(json_encode($datos));
}else if($_POST['acti']=='compra'){
    session_start();
	WC()->cart->empty_cart();
	if(!empty($_POST['id_plan']) and !empty($_POST['dias']) and !empty($_POST['card'])){
		if (WC()->cart->get_cart_contents_count() == 0) {
			$id_plan = absint($_POST['id_plan']);
			$dias = absint($_POST['dias']);
			$card = absint($_POST['card']);
			$_SESSION['dias'] = $dias;
			$_SESSION['card'] = $card;
			$cantidad = $dias + $card;
			WC()->cart->add_to_cart($id_plan, $cantidad);
			wp_die(wc_get_checkout_url());
		}
	}else{
		wp_die(FALSE);
	}
}else if($_POST['acti']=='correo'){
	add_filter('wp_mail_from_name', 'formPost_email_name_sender_usaalo');
	function formPost_email_name_sender_usaalo($email_from) {
	    if($email_from === "WordPress")
	        return 'Cotizador de Sim card';
	    else {
	        return $email_from;}
	}

	add_filter( "wp_mail_content_type", "tipo_de_contenido_html_sim_card" );
	require UADOC .'cotiza/plantilla_presupuesto_email.php';

	$destinatario = $_POST['email'];
	$asunto = "Presupuesto de Sim card";
	$cuerpo= $notificacion;
	$cabeceras= array('Content-Type: text/html; charset=UTF-8');

	wp_mail( $destinatario, $asunto , $cuerpo, $cabeceras);
	remove_filter( 'wp_mail_content_type', 'tipo_de_contenido_html_sim_card' );
	function tipo_de_contenido_html_sim_card() {
	     return "text/html";
	}
}

 ?>