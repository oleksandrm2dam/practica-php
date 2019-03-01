<?php require '../views/header.php'; ?>

<div class="contenedor">
	<h2 class="titulo">Nuevo artículo</h2>
	<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<input type="text" name="titulo" placeholder="Titulo del artículo">
		<input type="text" name="extracto" placeholder="Extracto del artículo">
		<textarea name="texto" placeholder="Texto del artículo"></textarea>
		<input type="file" name="thumb">
		<input type="submit" value="Crear artículo">
	</form>
</div>

<?php require '../views/footer.php'; ?>