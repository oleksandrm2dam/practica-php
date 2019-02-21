<!DOCTYPE html>

<html lang="es">
<head>
	<title>Blog</title>
	<meta name="viewport" content="width=device-width, user-scalable=no,
	initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php require 'views/header.view.php'; ?>

	<div class="contenedor">
		<div class="articulo">
			<h2 class="titulo"><?php echo $post['titulo']; ?></h2>
			<p class="fecha"><?php echo $post['fecha']; ?></p>
			<div class="thumb">
				<img src="<?php echo $blog_config['carpeta_imagenes']; ?><?php echo $post['thumb']; ?>">
			</div>
			<p><?php echo bl2br($post['texto']); ?></p>
		</div>
	</div>
	<?php require 'views/footer.view.php'; ?>
</body>
</html>