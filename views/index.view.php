<?php require 'header.php'; ?>

<div class="banner">
	<div class="container">
		<script src="js/responsiveslides.min.js"></script>
		<script>
			$(function () {
				$("#slider").responsiveSlides({
					auto: true,
					nav: true,
					speed: 500,
					namespace: "callbacks",
					pager: true,
				});
			});
		</script>
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
				<li>
					
					<div class="banner-text">
						<h3>Lorem Ipsum is   </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
						
					</div>

				</li>
				<li>
					
					<div class="banner-text">
						<h3>There are many  </h3>
						<p>Popular belief Contrary to , Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>


					</div>
					
				</li>
				<li>
					<div class="banner-text">
						<h3>Sed ut perspiciatis</h3>
						<p>Lorem Ipsum is not simply random text. Contrary to popular belief, It has roots in a piece of classical Latin literature from 45 BC.</p>


					</div>
					
				</li>
			</ul>
		</div>

	</div>
</div>

<!--content-->
<div class="container">
	<div class="cont">
		<div class="content">
			<div class="content-top-bottom">
				<h2>Featured PRODUCTS</h2>
				<div class="col-md-6 men">
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t1.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-top top-in   b-delay03 ">
								<span>TRIBECA LIVING</span>	
							</h3>
						</div>
					</a>
					
					
				</div>
				<div class="col-md-6">
					<div class="col-md1 ">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t2.jpg" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in1   b-delay03 ">
									<span>CLARISSA</span>	
								</h3>
							</div>
						</a>
						
					</div>
					<div class="col-md2">
						<div class="col-md-6 men1">
							<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t3.jpg" alt="">
								<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										<span>COLORMATE</span>	
									</h3>
								</div>
							</a>
							
						</div>
						<div class="col-md-6 men2">
							<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t4.jpg" alt="">
								<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										<span>HERLEQUIN</span>	
									</h3>
								</div>
							</a>
							
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="content-top">
				<h1>NUEVOS PRODUCTOS</h1>
				<div class="grid-in">

					<?php foreach ($ultimosProductos as $producto): ?>
						<div class="col-md-3 grid-top simpleCart_shelfItem">
							<a href="single.php?id=<?php echo $producto['id']; ?>" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="<?php echo RUTA; ?>/images/<?php echo $producto['imagen'] ?>" alt="">
								<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span><?php echo $producto['nombre']; ?></span>

									</h3>
								</div>
							</a>


							<p><a href="single.php?id=<?php echo $producto['id']; ?>"><?php echo $producto['nombre']; ?></a></p>
							<a href="#" class="item_add"><p class="number item_price"><i> </i>$<?php echo $producto['precio']; ?></p></a>
						</div>
					<?php endforeach ?>


					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	<!----->
	</div>
	<!---->
</div>

<?php require 'footer.php'; ?>