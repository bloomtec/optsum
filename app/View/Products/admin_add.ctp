<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Nuevo Producto'); ?></legend>
	<?php
		echo $this->Form->input('category_id', array('label' => 'Categoría', 'empty' => 'Seleccione...'));
		echo $this->Form->input('nombre');
		echo $this->Form->input('referencia');
		echo $this->Form->input('descripcion', array('label' => 'Descripción'));
		echo $this->Form->input('es_visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>