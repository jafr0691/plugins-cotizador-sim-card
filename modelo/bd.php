<?php
/****************** Crear tabla con la clase wpdb *****************/
global $wpdb;

// Con esto creamos el nombre de la tabla y nos aseguramos que se cree con el mismo prefijo que ya tienen las otras tablas creadas (wp_form).
$table_planes     = $wpdb->prefix . 'sim_card_relaciones_plan';

$sql = "CREATE TABLE ".$table_planes." (
  `id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `paises` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`paises`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
ALTER TABLE ".$table_planes."
  ADD PRIMARY KEY (`id`);
  ALTER TABLE ".$table_planes."
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;";

require_once ABSPATH . 'wp-admin/includes/upgrade.php';

dbDelta($sql);