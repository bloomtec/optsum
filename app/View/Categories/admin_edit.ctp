<div class="categories form">
	<?php echo $this -> Form -> create('Category', array('style' => 'width:380px; float:left;')); ?>
	<fieldset>
		<legend>
			<?php echo __('Modificar Categoría ' . $this -> data['Category']['nombre']); ?>
		</legend>
		<?php
		echo $this -> Form -> input('id');
		echo $this -> Form -> input('descripcion', array('label' => 'Descripción'));
		echo $this -> Form -> hidden('Image.id', array('value' => $this -> data['Image']['id']));
		echo $this -> Form -> hidden('Image.image', array('id' => 'single-field'));
		?>
	</fieldset>
	<?php echo $this -> Form -> end(__('Enviar')); ?>
	<div class="images" style="float: left; min-width: 400px;">
		<h2>Imagen</h2>
		<div id="ImagePreviewContainer"><img id="ImagePreview" src="/img/uploads/215x215/<?php echo $this -> data['Image']['image']; ?>" /></div>
		<div id="single-upload" controller="catalogs"></div>
	</div>
</div>