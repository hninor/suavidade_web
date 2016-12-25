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
	$precio = $_POST['precio'];
	$categoria = $_POST['categoria'];
	$id = limpiarDatos($_POST['id']);
	$thumb_guardada = $_POST['thumb-guardada'];
	$thumb = $_FILES['thumb'];

	if (empty($thumb['name'])) {
		$thumb = $thumb_guardada;
	} else {
		$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
		move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido);
		$thumb = $_FILES['thumb']['name'];
	}

	$statement = $conexion->prepare(
		'UPDATE productos SET nombre = :nombre, descripcion = :descripcion, precio = :precio, 
		imagen = :thumb, id_categoria = :categoria WHERE id = :id'
		);

	$statement->execute(array(
		':nombre' => $nombre,
		':descripcion' => $descripcion,
		':precio' => $precio,
		':thumb' => $thumb,
		':id' => $id,
		':categoria' => $categoria
		));

	header('Location: ' . RUTA . '/admin/products.php?id='. $categoria);
} else {
	$id = id_articulo($_GET['id']);

	if (empty($id)) {
		header('Location: ' . RUTA . '/admin');
	}

	$producto = obtener_producto_por_id($conexion, $id);


	if (!$producto) {
		header('Location: ' . RUTA . '/admin');
	}

	$producto = $producto[0];
}


require '../views/editar.view.php';

?>