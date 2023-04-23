<?php
/*
Plugin Name: Contizador sim card
Plugin URI:  https://github.com/jafr0691
Description: Cotizador cliente [cotizador] el panel del admin [admin_cotizador].
Version:     0.1
Author:      Jesus Farias
Author URI:  https://github.com/jafr0691
Domain Path: /languages/
Text Domain: COTISIMCARD
 */
defined('ABSPATH') or die('No script please!');

global $wpdb;
define('UADOC', plugin_dir_path(__FILE__));
define('UAARC', plugin_dir_url(__FILE__));

function cotiza_usaalo()
{
	global $wpdb;
    require_once UADOC . 'cotiza/cotiza.php';
}
add_shortcode('cotizador', 'cotiza_usaalo');

function admin_cotiza_usaalo()
{
    require_once UADOC . 'admin/control.php';
}
add_shortcode('admin_cotizador', 'admin_cotiza_usaalo');

function db_usa_alo()
{
    require_once UADOC . 'modelo/bd.php';
}
register_activation_hook(__FILE__, 'db_usa_alo');

register_uninstall_hook( __FILE__, 'usa_alo_uninstall' );
function usa_alo_uninstall() {
    require_once UADOC . 'modelo/uninstall.php';
}

function ua_cotiza()
{
	global $wpdb;
    require_once UADOC . 'cotiza/cotiza_sql.php';
}

function ua_cotiza_jquery()
{
    wp_register_script('script_query', plugin_dir_url(__FILE__) .'admin/plugins/jQuery/jQuery-2.1.3.min.js', array('jquery'), '1', true);
    wp_enqueue_script('script_query');
    wp_register_script('script_query_table', plugin_dir_url(__FILE__) .'admin/plugins/datatables/jquery.dataTables.js', array('jquery'), '1', true);
    wp_enqueue_script('script_query_table');
    wp_register_script('script_query_btable', plugin_dir_url(__FILE__) .'admin/plugins/datatables/dataTables.bootstrap.js', array('jquery'), '1', true);
    wp_enqueue_script('script_query_btable');
    wp_register_script('script_bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js', array('jquery'), '1', true);
    wp_enqueue_script('script_bootstrap');


    wp_enqueue_style( 'admin_usaalo_uno', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'admin_usaalo_dos', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'admin_usaalo_tres', plugin_dir_url(__FILE__) . 'admin/bootstrap/css/icons.css', array(), '1.0', 'all' );
    wp_register_script('script_ua_cotiza', plugin_dir_url(__FILE__) . 'js/ua_cotiza.js', array('jquery'), '3', true);
    wp_enqueue_script('script_ua_cotiza');
    wp_localize_script('script_ua_cotiza', 'ua_cotiza', ['ua_cotizaajaxurl' => admin_url('admin-ajax.php')]);

}

add_action('wp_enqueue_scripts', 'ua_cotiza_jquery');
add_action('wp_ajax_ua_cotiza', 'ua_cotiza');
add_action('wp_ajax_nopriv_ua_cotiza', 'ua_cotiza');

add_action( 'woocommerce_after_order_notes', 'agrega_mi_campo_personalizado_usaalo' );

function agrega_mi_campo_personalizado_usaalo( $checkout ) {
    session_start();
    if(isset($_SESSION['dias']) and isset($_SESSION['card'])){
        if($_SESSION['dias']<4){
            $_SESSION['dias'] = 4;
        }
        $dyc = 'Cantidad de Dias: '.$_SESSION['dias'].' y Sim Card:'.$_SESSION['card'];
    }else{
        $dyc = 'tiene que ingresar la cantidad de dias y sim card.';
    }

    echo '<div id="woocommerce-additional-fields"><h2>' . __('Informacion del pedido') . '</h2>';

    woocommerce_form_field( 'diassimcard', array(
        'type'          => 'text',
        'class'         => array('input-text '),
        'label'         => __('Dias y sim Card'),
        'placeholder'   => __('Dias y sim Card'),
        'default'   => __($dyc),
        ), $checkout->get_value('diassimcard'));

    echo '</div>';
}
add_action( 'woocommerce_checkout_update_order_meta', 'actualizar_info_pedido_con_nuevo_campo_usaalo' );

function actualizar_info_pedido_con_nuevo_campo_usaalo( $order_id ) {
    if ( ! empty( $_POST['diassimcard'] ) ) {
        update_post_meta( $order_id, 'diassimcard', sanitize_text_field( $_POST['diassimcard'] ) );
    }
}
add_action( 'woocommerce_admin_order_data_after_billing_address', 'mostrar_campo_personalizado_en_admin_pedido_usaalo', 10, 1 );

function mostrar_campo_personalizado_en_admin_pedido_usaalo($order){
    echo '<p><strong>'.__('Cantidad de dias y sim card').':</strong> ' . get_post_meta( $order->id, 'diassimcard', true ) . '</p>';
}
add_filter('woocommerce_email_order_meta_keys', 'muestra_campo_personalizado_email_usaalo');

function muestra_campo_personalizado_email_usaalo( $keys ) {
    $keys[] = 'diassimcard';
    return $keys;
}
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields_usaalo' );

function custom_override_checkout_fields_usaalo( $fields ) {
    session_start();
    if(isset($_SESSION['dias']) and isset($_SESSION['card'])){
        if($_SESSION['dias']<4){
            $_SESSION['dias'] = 4;
        }
        $dyc = 'Cantidad de Dias: '.$_SESSION['dias'].' y Sim Card:'.$_SESSION['card'];
    }else{
        $dyc = 'tiene que ingresar la cantidad de dias y sim card.';
    }

     $fields['order']['order_comments']['default'] = __($dyc);
     return $fields;
}