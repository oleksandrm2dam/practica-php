<!DOCTYPE html>

<html lang="es">
<head>
	<title>Blog</title>
	<meta name="viewport" content="width=device-width, user-scalable=no,
	initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stlyesheet" href="css/style.css">
</head>

<body>
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
				<p><a href="#">Mi primer blog</a></p>
			</div>
			
			<div class="derecha">
				<form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
					<input type="text" name="busqueda" placeholder="Buscar">
					<button type="submit" class="icono fa fa-search"></button>
				</form>
			</div>
		</div>		
	</header>	
</body>
</html>