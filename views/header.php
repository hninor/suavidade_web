<?php 
$categorias = obtener_categorias($conexion);
$tamanoArreglo = count($categorias);
$items_por_columna = ceil($tamanoArreglo / 3);
?>
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Mattress A Ecommerce Category Flat Bootstrap Responsive Website Template | Products :: w3layouts</title>
	<link href="<?php echo RUTA; ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo RUTA; ?>/js/jquery.min.js"></script>
	<script src="<?php echo RUTA; ?>/js/validation.form.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="<?php echo RUTA; ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />	
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Mattress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--fonts-->
	<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
	<!-- start menu -->
	<link href="<?php echo RUTA; ?>/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="<?php echo RUTA; ?>/js/memenu.js"></script>
	<script>$(document).ready(function(){$(".memenu").memenu();});</script>
	<script src="<?php echo RUTA; ?>/js/simpleCart.min.js"> </script>
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="social">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="inst"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
						<div class="clearfix"></div>	
					</ul>
				</div>
				<div class="header-left">

					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form action="#" method="post">
								<input class="sb-search-input" placeholder="Buscar..." type="search"  id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>

					<!-- search-scripts -->
					<script src="<?php echo RUTA; ?>/js/classie.js"></script>
					<script src="<?php echo RUTA; ?>/js/uisearch.js"></script>
					<script>
						new UISearch( document.getElementById( 'sb-search' ) );
					</script>
					<!-- //search-scripts -->

					<div class="ca-r">
						<div class="cart box_1">
							<a href="checkout.php">
								<h3> <div class="total">
									<span class="simpleCart_total"></span> </div>
									<img src="images/cart.png" alt=""/></h3>
								</a>
								<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

							</div>
						</div>
						<div class="clearfix"> </div>
					</div>

				</div>
			</div>
			<div class="container">
				<div class="head-top">
					<div class="logo">
						<h1><a href="index.php">Suavidade</a></h1>
					</div>
					<div class=" h_menu4">
						<ul class="memenu skyblue">
							<li><a class="color8" href="index.php">Inicio</a></li>	
							<li><a class="color1" href="#">Nosotros</a>
	<!-- 			      	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.php">Bedskirt</a></li>
										<li><a href="products.php">Blanket/Throw</a></li>
										<li><a href="products.php">Collection/Duvet</a></li>
										<li><a href="products.php">Comforter</a></li>
										<li><a href="products.php">Comforter Set</a></li>
										<li><a href="products.php">Decorative Pillow</a></li>
										<li><a href="products.php">Mattress Pad </a></li>
										<li><a href="products.php">Mattress Topper</a></li>
										<li><a href="products.php">Pillow</a></li>
										<li><a href="products.php">Pillow Protector</a></li>
										
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.php">Alpaca</a></li>
										<li><a href="products.php">Cashmere</a></li>
										<li><a href="products.php">Cotton</a></li>
										<li><a href="products.php">Cotton Blend</a></li>
										<li><a href="products.php">Down</a></li>
										<li><a href="products.php">Down Alternative</a></li>
										<li><a href="products.php">Egyptian Cotton</a></li>
										<li><a href="products.php">Modal</a></li>
										<li><a href="products.php">Pima Cotton</a></li>
										<li><a href="products.php">Silk </a></li>
										
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.php">Bedskirt</a></li>
										<li><a href="products.php">Blanket/Throw</a></li>
										<li><a href="products.php">Collection/Duvet</a></li>
										<li><a href="products.php">Comforter</a></li>
										<li><a href="products.php">Comforter Set</a></li>
										<li><a href="products.php">Decorative Pillow</a></li>
										<li><a href="products.php">Mattress Pad </a></li>
										<li><a href="products.php">Mattress Topper</a></li>
										<li><a href="products.php">Pillow</a></li>
										<li><a href="products.php">Pillow Protector</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div> -->
					</li>
					<li class="grid"><a class="color2" href="#">Tienda</a>
						<div class="mepanel">
							<div class="row">

								<?php for ($i = 1; $i <= 3; $i++) : 
								$offset = ($i - 1) * $items_por_columna;
								$recorrer = $items_por_columna + $offset;
								if ($recorrer > $tamanoArreglo) {
									$recorrer = $tamanoArreglo;
								} ?>

								<div class="col1">
									<div class="h_nav">
										<ul>

											<?php for ($j = $offset; $j < $recorrer; $j++) :  ?>
												<li><a href="products.php?id=<?php echo $categorias[$j]['id']; ?>"><?php echo $categorias[$j]['categoria']; ?></a></li>
											<?php endfor?>	

										</ul>		
									</div>							
								</div>
							<?php endfor ?>

						</div>
					</div>
				</li>		
				<li><a class="color4" href="login.php">Login</a></li>				
				<li><a class="color6" href="contact.php">Contacto</a></li>	
			</ul> 
		</div>

		<div class="clearfix"> </div>
	</div>
</div>
</div>