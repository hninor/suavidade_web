<?php 

function conexion($bd_config){
	try {
		$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}

function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}

function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_post($post_por_pagina, $conexion){
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function obtener_productos_por_categoria($id, $conexion){


	$resultado = $conexion->query("SELECT * FROM productos WHERE id_categoria = $id");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function numero_paginas($post_por_pagina, $conexion){
	$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_post->execute();
	$total_post = $total_post->fetch()['total'];

	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}

function id_articulo($id){
	return (int)limpiarDatos($id);
}

function obtener_producto_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM productos WHERE id = $id");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function fecha($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

	$dia = date('d', $timestamp); 
	$mes = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$fecha = "$dia de " . $meses[$mes] . " del $year";
	return $fecha;
}

function comprobarSession(){
	if (!isset($_SESSION['admin'])) {
		header('Location: ' .  RUTA);
	}
}

function obtener_categorias($conexion){
	$resultado = $conexion->query("SELECT * FROM categorias");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function obtener_nuevos_productos($conexion){
	$resultado = $conexion->query("SELECT * FROM productos ORDER BY id DESC LIMIT 4");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}
?>