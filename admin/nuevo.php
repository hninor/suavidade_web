<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ../error.php');
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = limpiarDatos($_POST['nombre']);
	$descripcion = limpiarDatos($_POST['descripcion']);
	$precio = limpiarDatos($_POST['precio']);
	$thumb = $_FILES['thumb']['tmp_name'];
	$id_categoria = $_POST['categoria'];

	$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
	//print_r($_FILES['thumb']['name']);
	move_uploaded_file($thumb, $archivo_subido);

	$statement = $conexion->prepare(
	'INSERT INTO productos (id, nombre, descripcion, imagen, precio, id_categoria)
	VALUES (null, :nombre, :descripcion, :imagen, :precio, :id_categoria)'
	);

	$statement->execute(array(
		':nombre' => $nombre,
		':descripcion' => $descripcion,
		':imagen' => $_FILES['thumb']['name'],
		':precio' => $precio,
		':id_categoria' => $id_categoria
	));

	header('Location: '. RUTA . '/admin');
} 

require '../views/nuevo.view.php';

?>