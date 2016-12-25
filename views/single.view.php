<?php require 'header.php'; ?>
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
							<li data-thumb="images/si1.jpg">
								<div class="thumb-image"> <img src="images/si1.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="images/si2.jpg">
								<div class="thumb-image"> <img src="images/si2.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li> 
							<li data-thumb="images/si3.jpg">
								<div class="thumb-image"> <img src="images/si3.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
						</ul>
					</div>

					<div class="clearfix"> </div>
					<!-- slide -->


					<!-- FlexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

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
		<h4><?php echo $producto['nombre']; ?></h4>
		<div class="star-on">

			<div class="review">
				<a href="#"> 1 revisión</a>

			</div>
			<div class="clearfix"> </div>
		</div>

		<h5 class="item_price">$ <?php echo $producto['precio'] ?></h5>
		<p><?php echo $producto['descripcion'] ?> </p>
		<div class="available">
			<ul>
				<li>Color
					<select>
						<option>Plateado</option>
						<option>Negro</option>
						<option>Rojo</option>
					</select></li>
					<li class="size-in">Tamaño<select>
						<option>Largo</option>
						<option>Medio</option>
						<option>Pequeño</option>
					</select></li>
					<div class="clearfix"> </div>
				</ul>
			</div>

			<a href="#" class="add-cart item_add">Agregar al carro</a>

		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!---->

<div class=" bottom-product">
	<div class="col-md-4 bottom-cd simpleCart_shelfItem">
		<div class="product-at ">
			<a href="#"><img class="img-responsive" src="images/pi3.jpg" alt="">
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
			<a href="#"><img class="img-responsive" src="images/pi1.jpg" alt="">
				<div class="pro-grid">
					<span class="buy-in">Buy Now</span>
				</div>
			</a>	
		</div>
		<p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
		<div class="ca-rt">
			<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>						
		</div>					</div>
		<div class="col-md-4 bottom-cd simpleCart_shelfItem">
			<div class="product-at ">
				<a href="#"><img class="img-responsive" src="images/pi4.jpg" alt="">
					<div class="pro-grid">
						<span class="buy-in">Buy Now</span>
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