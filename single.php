<?php 

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: error.php');
}

$id = id_articulo($_GET['id']);
$producto = obtener_producto_por_id($conexion, $id);
$producto = $producto[0];
//print_r($producto);

require 'views/single.view.php';

?>