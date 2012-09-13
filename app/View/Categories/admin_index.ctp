<div class="categories index">
	<h2><?php echo __('Categorías'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this -> Paginator -> sort('nombre'); ?></th>
			<th><?php echo $this -> Paginator -> sort('descripcion', 'Descripción'); ?></th>
			<th><?php echo $this -> Paginator -> sort('modified', 'Modificada'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		<?php foreach ($categories as $category): ?>
		<tr>
			<td><?php echo h($category['Category']['nombre']); ?>&nbsp;</td>
			<td><?php echo h($category['Category']['descripcion']); ?>&nbsp;</td>
			<td><?php echo h($category['Category']['modified']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this -> Html -> link(__('Ver'), array('action' => 'view', $category['Category']['id'])); ?>
				<?php echo $this -> Html -> link(__('Modificar'), array('action' => 'edit', $category['Category']['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<p>
		<?php
		echo $this -> Paginator -> counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));
		?>
	</p>
	<div class="paging">
		<?php
		echo $this -> Paginator -> prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this -> Paginator -> numbers(array('separator' => ''));
		echo $this -> Paginator -> next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
	</div>
</div>
