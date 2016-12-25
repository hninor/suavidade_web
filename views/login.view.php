<?php require 'header.php'; ?>

	<div class="grow">
		<div class="container">
			<h2>Login</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class="container">
		<div class="account">
		<div class="account-pass">
		<div class="col-md-8 account-top">
			<form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				
			<div> 	
				<span>Usuario</span>
				<input type="text" name="usuario"> 
			</div>
			<div> 
				<span >Contraseña</span>
				<input type="password" name="password">
			</div>				
				<input type="submit" value="Login"> 
			</form>
		</div>
		<div class="col-md-4 left-account ">
			<a href="single.html"><img class="img-responsive " src="images/s1.jpg" alt=""></a>
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