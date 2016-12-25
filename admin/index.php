<?php session_start();

// Archivo index del ADMIN

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

comprobarSession();

if (!$conexion) {
	header('Location: ../error.php');
} else {
	header('Location: products.php?id=1');
}



require '../views/admin_index.view.php';

?>