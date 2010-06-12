<div id="sidebar">

	<div class="sidebox">
		<h1 class="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Grupo', true)), array('controller' => 'groups', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Grupos', true)), array('controller' => 'groups', 'action' => 'index')); ?></li>
		</ul>

	</div>

</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>

	<div class="post">
		<h1><?php __('Grupos');?></h1>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('id');?></th>
				<th><?php echo $this->Paginator->sort('name');?></th>
				<th><?php echo $this->Paginator->sort('created');?></th>
				<th><?php echo $this->Paginator->sort('modified');?></th>
				<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($groups as $group):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $group['Group']['id']; ?>&nbsp;</td>
			<td><?php echo $group['Group']['name']; ?>&nbsp;</td>
			<td><?php echo $group['Group']['created']; ?>&nbsp;</td>
			<td><?php echo $group['Group']['modified']; ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('action' => 'view', $group['Group']['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $group['Group']['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $group['Group']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $group['Group']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table>
		<div class="paging">
			<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
		 | 	<?php echo $this->Paginator->numbers();?>
	 |
			<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
		</div>
	</div>
</div>