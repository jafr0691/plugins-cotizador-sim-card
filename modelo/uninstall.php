<?php
// If uninstall is not called from WordPress, exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}

// Drop a custom db table
global $wpdb;
$table_planes     = $wpdb->prefix . 'sim_card_relaciones_plan';


$wpdb->query( "DROP TABLE IF EXISTS {$table_planes }" );


