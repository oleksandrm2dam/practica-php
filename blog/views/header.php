<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/style.css">
	<title>Blog</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo RUTA; ?>"><img src="<?php echo RUTA . '/' . $blog_config['carpeta_imagenes'] . 'logo.png';?>"></a>
		</div>
		<div class="busqueda">
			<form name="busqueda" action="<?php echo RUTA; ?>/buscar.php" method="get">
				<input type="text" name="busqueda" placeholder="Buscar">
				<button type="submit" value="Buscar">Buscar</button>
			</form>
		</div>
	</div>