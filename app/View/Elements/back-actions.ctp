<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li>
			<?php echo $this -> Html -> link(__('Ver Categorías'), array('controller' => 'categories', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this -> Html -> link(__('Ver Productos'), array('controller' => 'products', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this -> Html -> link(__('Nuevo Producto'), array('controller' => 'products', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this -> Html -> link(__('Ver Usuarios'), array('controller' => 'users', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this -> Html -> link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?>
		</li>
	</ul>
</div>