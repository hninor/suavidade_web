<?php require '../views/header.php'; ?>

<!-- products -->
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>Panel de Control</h2>
			<a href="nuevo.php" class="btn">Nuevo Producto</a>
			<a href="cerrar.php" class="btn">Cerrar Sesión</a>
		</div>
	</div>


	<!-- grow -->
	<div class="pro-du">
		<div class="container">
			<div class="col-md-9 product1">
				<div class=" bottom-product">

					<?php foreach ($products as $product ): ?>
						<div class="col-md-6 bottom-cd simpleCart_shelfItem">
							<div class="product-at ">
								<a href="editar.php?id=<?php  echo  $product['id'];?>">
									<img class="img-responsive" src="<?php echo RUTA; ?>/images/<?php echo $product['imagen'];?>" alt="#">
								</a>	
							</div>
							<p class="tun"><span><?php echo  $product['nombre'];?></span><br><?php echo  $product['nombre'];?></p>
							<div class="ca-rt">
								<a href="#" class="item_add"><p class="number item_price"><i> </i><?php echo  '$ ' . $product['precio'];?></p></a>						
							</div>
							<div class="clearfix"></div>
						</div>
					<?php endforeach ?>

					

					<div class="clearfix"> </div>
				</div>
					
			</div>
			<div class="col-md-3 prod-rgt">
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="single.php"><img class="img-responsive" src="../images/l2.jpg" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="single.php">TRIBECA LIVING</a></h6>
						<p><a href="single.php">450$</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="single.php"><img class="img-responsive" src="../images/l3.jpg" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="single.php">TRIBECA LIVING</a></h6>
						<p><a href="single.php">450$</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="single.php"><img class="img-responsive" src="../images/l1.jpg" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="single.php">TRIBECA LIVING</a></h6>
						<p><a href="single.php">450$</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
				<div class="pr-btm">
				<h4>Lo que nuestros clientes dicen</h4>
					<img class="img-responsive" src="../images/pi.jpg" alt="">
					<h6>John</h6>
					<p>Lorem Ipsum is simply dummy text of the printing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
<!-- products -->

<?php require '../views/footer.php'; ?>