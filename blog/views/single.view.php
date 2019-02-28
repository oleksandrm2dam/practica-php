<?php require 'views/header.php'; ?>

<div class="contenedor">
	<div class="articulo">
		<h2 class="titulo"><?php echo $post['titulo']; ?></h2>
		<p class="fecha"><?php echo $post['fecha']; ?></p>
		<div class="thumb">
			<img src="<?php echo $blog_config['carpeta_imagenes']; ?><?php echo $post['thumb']; ?>">
		</div>
		<p><?php echo nl2br($post['texto']); ?></p>
	</div>
</div>

<?php require 'views/footer.php'; ?>