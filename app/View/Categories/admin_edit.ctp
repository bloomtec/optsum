<div class="categories form">
	<?php echo $this -> Form -> create('Category'); ?>
	<fieldset>
		<legend>
			<?php echo __('Modificar Categoría ' . $this -> data['Category']['nombre']); ?>
		</legend>
		<?php
		echo $this -> Form -> input('id');
		echo $this -> Form -> input('descripcion', array('label' => 'Descripción'));
		?>
	</fieldset>
	<?php echo $this -> Form -> end(__('Enviar')); ?>
</div>