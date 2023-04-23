<?php
if(!empty($_POST['id_plan']) and !empty($_POST['cantidad'])){
		$id_plan = $_POST['id_plan'];
		$cantidad = $_POST['cantidad'];
		WC()->cart->add_to_cart($id_plan, $cantidad);
		wp_redirect(wc_get_checkout_url());
	}else{
		wp_die(FALSE);
	}

 ?>