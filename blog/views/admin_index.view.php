<?php require '../views/header.php'; ?>

<div class="contenedor">
	<h2>Panel de control</h2>
	<a href="nuevo.php">Nuevo Post</a>
	<?php foreach($posts as $post): ?>
		<div class="articulo">
			<h2 class="titulo"><?php echo $post['id'] . '.-' . $post['titulo']; ?></h2>
			<a href="editar.php?id=<?php echo $post['id']; ?>">Editar</a>
			<a href="../single.php?id=<?php echo $post['id']; ?>">Ver</a>
			<a href="borrar.php?id=<?php echo $post['id']; ?>">Borrar</a>
		</div>
	<?php endforeach; ?>	
	<?php require '../paginacion.php'; ?>
</div>

<?php require 'footer.php'; ?>