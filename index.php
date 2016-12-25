<?php 

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: error.php');
}

$ultimosProductos = obtener_nuevos_productos($conexion);

require 'views/index.view.php';

?>