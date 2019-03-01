	<div class="footer">
		<?php if(session_status() != PHP_SESSION_ACTIVE): ?>
			<?php session_start() ?>
		<?php endif; ?>	
		<?php if(isset($_SESSION['admin'])): ?>
			<a href="<?php echo RUTA . '/'?>admin">Panel de control</a>
			<a href="<?php echo RUTA . '/admin/cerrar.php'?>">Cerrar sesión</a>
		<?php else: ?>
			<a href="<?php echo RUTA . '/'?>login.php">Login</a>	
		<?php endif; ?>	
	</div>
</body>
</html>