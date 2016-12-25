<?php require 'header.php'; ?>

<?php $categoria_producto = $producto['id_categoria']; ?>
<!-- grow -->
<div class="grow">
	<div class="container">
		<h2>Producto</h2>
	</div>
</div>
<!-- grow -->
<div class="product">
	<div class="container">

		<div class="product-price1">
			<div class="top-sing">
				<div class="col-md-7 single-top">	
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="<?php echo RUTA; ?>/images/<?php echo $producto['imagen']; ?>">
								<div class="thumb-image"> <img src="<?php echo RUTA; ?>/images/<?php echo $producto['imagen']; ?>" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="../images/si1.jpg">
								<div class="thumb-image"> <img src="../images/si1.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="../images/si2.jpg">
								<div class="thumb-image"> <img src="../images/si2.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li> 
							<li data-thumb="../images/si3.jpg">
								<div class="thumb-image"> <img src="../images/si3.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
						</ul>
					</div>

					<div class="clearfix"> </div>
					<!-- slide -->


					<!-- FlexSlider -->
					<script defer src="<?php echo RUTA; ?>/js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="<?php echo RUTA; ?>/css/flexslider.css" type="text/css" media="screen" />

					<script>
// Can also be used with $(document).ready()
$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	});
});
</script>







</div>	
<div class="col-md-5 single-top-in simpleCart_shelfItem">
	<div class="single-para ">
		<h2 class="titulo">Editar Producto</h2>


		<div class="star-on">
			<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<input type="hidden" value="<?php echo $producto['id']; ?>" name="id">
				<input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>">
				<br><br>
				<textarea name="descripcion"><?php echo $producto['descripcion']; ?></textarea>
				<br><br>
				<input type="number" name="precio"  value="<?php echo $producto['precio']; ?>">
				<br><br>
				<select name="categoria" required="true">
					<option selected disabled>Seleccione la categoría</option>
					<?php foreach ($categorias as $categoria): ?>
						<?php if ($categoria_producto == $categoria['id']): ?>
							<option value="<?php echo $categoria['id']; ?>" selected="selected"><?php echo $categoria['categoria']; ?></option>
						<?php else: ?>
							<option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['categoria']; ?></option>
						<?php endif ?>
						
					<?php endforeach ?>


				</select>
				<br><br>
				<input type="file" name="thumb">
				<br>
				<input type="hidden" name="thumb-guardada" value="<?php echo $producto['imagen']; ?>">

				<input type="submit" value="Modificar Articulo">
			</form>
			<div class="clearfix"> </div>
		</div>

	</div>
</div>
<div class="clearfix"> </div>
</div>
<!---->

<div class=" bottom-product">
	<div class="col-md-4 bottom-cd simpleCart_shelfItem">
		<div class="product-at ">
			<a href="#"><img class="img-responsive" src="../images/pi3.jpg" alt="">
				<div class="pro-grid">
					<span class="buy-in">Comprar ahora</span>
				</div>
			</a>	
		</div>
		<p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
		<div class="ca-rt">
			<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>						
		</div>						
	</div>
	<div class="col-md-4 bottom-cd simpleCart_shelfItem">
		<div class="product-at ">
			<a href="#"><img class="img-responsive" src="../images/pi1.jpg" alt="">
				<div class="pro-grid">
					<span class="buy-in">Comprar ahora</span>
				</div>
			</a>	
		</div>
		<p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
		<div class="ca-rt">
			<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>						
		</div>					</div>
		<div class="col-md-4 bottom-cd simpleCart_shelfItem">
			<div class="product-at ">
				<a href="#"><img class="img-responsive" src="../images/pi4.jpg" alt="">
					<div class="pro-grid">
						<span class="buy-in">Comprar ahora</span>
					</div>
				</a>	
			</div>
			<p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
			<div class="ca-rt">
				<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>						
			</div>					</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="clearfix"> </div>
</div>
</div>
<!--//content-->
<?php require 'footer.php'; ?>