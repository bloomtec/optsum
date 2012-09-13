<div class="users form">
	<?php echo $this -> Form -> create('User'); ?>
	<fieldset>
		<legend>
			<?php echo __('Modfiicar Usuario ' . $this -> data['User']['nombre_de_usuario']); ?>
		</legend>
		<?php
		echo $this -> Form -> input('id');
		echo $this -> Form -> input('nombres');
		echo $this -> Form -> input('apellidos');
		echo $this -> Form -> input('nombre_de_usuario');
		echo $this -> Form -> input('correo');
		echo $this -> Form -> input('contraseña');
		echo $this -> Form -> input('usuario_activo');
		?>
	</fieldset>
	<?php echo $this -> Form -> end(__('Enviar')); ?>
</div>