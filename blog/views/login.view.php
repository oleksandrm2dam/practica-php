<?php require 'views/header.php'; ?>

<div class="contenedor">
	<h2 class="titulo">Iniciar Sesión</h2>
	<form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<input type="text" name="usuario" placeholder="Usuario">
		<input type="password" name="password" placeholder="Contraseña">
		<input type="submit" value="Iniciar Sesión">
	</form>		
</div>

<?php require 'views/footer.php'; ?>