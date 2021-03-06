<div class="users index">
	<h2><?php echo __('Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this -> Paginator -> sort('nombres'); ?></th>
			<th><?php echo $this -> Paginator -> sort('apellidos'); ?></th>
			<th><?php echo $this -> Paginator -> sort('nombre_de_usuario'); ?></th>
			<th><?php echo $this -> Paginator -> sort('correo'); ?></th>
			<th><?php echo $this -> Paginator -> sort('usuario_activo'); ?></th>
			<th><?php echo $this -> Paginator -> sort('created', 'Creado'); ?></th>
			<th><?php echo $this -> Paginator -> sort('modified', 'Modificado'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($users as $user): ?>
		<tr>
			<td><?php echo h($user['User']['nombres']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['apellidos']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['nombre_de_usuario']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['correo']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['usuario_activo']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this -> Html -> link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
				<?php echo $this -> Html -> link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
				<?php echo $this -> Form -> postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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