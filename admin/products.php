<?php 

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: error.php');
}

$id = id_articulo($_GET['id']);
$products = obtener_productos_por_categoria($id, $conexion);

//print_r($products);

require '../views/admin_products.view.php';

?>