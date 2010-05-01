<div id="sidebar">

	<div class="sidebox">
		<h1 class="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('Nova %s', true), __('Venda', true)), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Usuários', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Usuário', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Produtos', true)), array('controller' => 'products', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Produto', true)), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>

	</div>
	
</div>

<div id="main">

	<div class="post">
	
		<h1><?php __('Vendas');?></h1>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('ID', 'id');?></th>
				<th><?php echo $this->Paginator->sort('ID do Usuário', 'user_id');?></th>
				<th><?php echo $this->Paginator->sort('Criado em', 'created');?></th>
				<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($sales as $sale):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $sale['Sale']['id']; ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($sale['User']['name'], array('controller' => 'users', 'action' => 'view', $sale['User']['id'])); ?>
			</td>
			<td><?php echo $time->niceShort($sale['Sale']['created']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('action' => 'view', $sale['Sale']['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $sale['Sale']['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $sale['Sale']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sale['Sale']['id'])); ?>
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
