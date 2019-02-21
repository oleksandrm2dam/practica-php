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
		<?php foreach($resultados as $post): ?>
			<div class="articulo">
				<h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php  echo $post["titulo"] ?></a></h2>
				<p class="fecha"><?php echo $post["fecha"]; ?></p>
				<div class="thumb">
					<a href="single.php?id=<?php echo $post['id']; ?>">
						<img src="<?php echo $blog_config['carpeta_imagenes']; ?><?php echo $post['thumb']; ?>">
					</a>
				</div>
				<p class="extracto"><?php echo $post['extracto']; ?></p>
				<a href="single.php?id=<?php echo $post['id']; ?>">Continuar leyendo</a>
			</div>
		<?php endforeach; ?>	
		<?php require 'views/paginacion.view.php'; ?>
	</div>
	<?php require 'views/footer.view.php'; ?>
</body>
</html>