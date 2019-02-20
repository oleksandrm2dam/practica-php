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
			<h2 class="titulo">Título del artículo</h2>
			<p class="fecha">25-11-1998</p>
			<div class="thumb">
				<a href="#">
					<img src="<?php echo RUTA; ?>/img/1.png">
				</a>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	<?php require 'views/footer.view.php'; ?>
</body>
</html>