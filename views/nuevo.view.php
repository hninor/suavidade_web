<?php require 'header.php'; ?>


<div class="grow">
	<div class="container">
		<h2>Nuevo producto</h2>
	</div>
</div>
<!-- grow -->
<!--content-->
<div class="container">
	<div class="account">
		<div class="account-pass">
			<div class="col-md-8 account-top">
				<form name = "nuevoProducto" onsubmit="return validateForm()" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<input type="text" name="nombre" placeholder="Nombre del producto" required="true">
					<br><br>
					<textarea name="descripcion" placeholder="Ingrese descripción"></textarea>
					<br><br>
					<input type="number" name="precio" placeholder="Precio del producto" required="true">
					<br><br>
					<select name="categoria" required="true">
						<option value="">Seleccione la categoría</option>
						<?php foreach ($categorias as $categoria): ?>
							<option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['categoria']; ?></option>
						<?php endforeach ?>


					</select>
					<br><br>
					<input type="file" name="thumb" required="true">
					<input type="submit" value="Crear Producto">


				</form>
			</div>
			<div class="col-md-4 left-account ">
				<a href="single.html"><img class="img-responsive " src="../images/s1.jpg" alt=""></a>
				<div class="five">
					<h2>25% </h2><span>Descuento</span>
				</div>
				<a href="register.html" class="create">Crear una cuenta</a>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

</div>


<?php require 'footer.php'; ?>