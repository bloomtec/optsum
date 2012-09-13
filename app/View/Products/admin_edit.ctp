<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Modificar Producto ' . $this -> data['Product']['nombre']); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('referencia');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('es_visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>