<!DOCTYPE html>
<html lang="es">

<head>
	<title>Artículos</title>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
	<div id="header">
		<p>Buscador</p>
	</div>

	<div class="contenedor">
		<div id="articulos">
			<h1>Artículos</h1>
			<?php
				for($i=$inicio + 1; $i <= $inicio + $postsPorPagina; $i++) {
					echo "<div class='articulo'>Articulo $i</div>";
				}
			?>
		</div>

		<div class="paginacion">
			<ul>
				<?php if ($pagina == 1): ?>
					<li class="disabled">&laquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
				<?php endif; ?>	

				<?php
					for($i=1; $i <= $numeroPaginas; $i++) {
						if($pagina == $i) {
							echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
						} else {
							echo "<li><a href='?pagina=$i'>$i</a></li>";
						}
					}
				?>

				<?php if ($pagina == $numeroPaginas): ?>
					<li class="disabled">&raquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
				<?php endif; ?>	
			</ul>	
		</div>	
	</div>	

	<div id="footer">
		<a href="#">Login</a>
	</div>
</body>

</html>